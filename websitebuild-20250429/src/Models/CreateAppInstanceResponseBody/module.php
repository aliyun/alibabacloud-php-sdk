<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $siteHost;
    protected $_name = [
        'bizId' => 'BizId',
        'instanceId' => 'InstanceId',
        'orderId' => 'OrderId',
        'siteHost' => 'SiteHost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->siteHost) {
            $res['SiteHost'] = $this->siteHost;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['SiteHost'])) {
            $model->siteHost = $map['SiteHost'];
        }

        return $model;
    }
}

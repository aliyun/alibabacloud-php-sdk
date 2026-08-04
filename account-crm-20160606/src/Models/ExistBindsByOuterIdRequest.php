<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class ExistBindsByOuterIdRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $minorOuterId;

    /**
     * @var string
     */
    public $outerId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'appName' => 'AppName',
        'minorOuterId' => 'MinorOuterId',
        'outerId' => 'OuterId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->minorOuterId) {
            $res['MinorOuterId'] = $this->minorOuterId;
        }

        if (null !== $this->outerId) {
            $res['OuterId'] = $this->outerId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['MinorOuterId'])) {
            $model->minorOuterId = $map['MinorOuterId'];
        }

        if (isset($map['OuterId'])) {
            $model->outerId = $map['OuterId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

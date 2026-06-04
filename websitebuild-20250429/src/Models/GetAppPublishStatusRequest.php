<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetAppPublishStatusRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $deployOrderId;

    /**
     * @var string
     */
    public $websiteDomain;
    protected $_name = [
        'bizId' => 'BizId',
        'deployOrderId' => 'DeployOrderId',
        'websiteDomain' => 'WebsiteDomain',
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

        if (null !== $this->deployOrderId) {
            $res['DeployOrderId'] = $this->deployOrderId;
        }

        if (null !== $this->websiteDomain) {
            $res['WebsiteDomain'] = $this->websiteDomain;
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

        if (isset($map['DeployOrderId'])) {
            $model->deployOrderId = $map['DeployOrderId'];
        }

        if (isset($map['WebsiteDomain'])) {
            $model->websiteDomain = $map['WebsiteDomain'];
        }

        return $model;
    }
}

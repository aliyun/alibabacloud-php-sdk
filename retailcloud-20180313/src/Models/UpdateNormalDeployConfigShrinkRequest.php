<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class UpdateNormalDeployConfigShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $containerResourceLimitShrink;

    /**
     * @var string
     */
    public $containerResourceRequestShrink;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'appId'                          => 'AppId',
        'containerResourceLimitShrink'   => 'ContainerResourceLimit',
        'containerResourceRequestShrink' => 'ContainerResourceRequest',
        'id'                             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->containerResourceLimitShrink) {
            $res['ContainerResourceLimit'] = $this->containerResourceLimitShrink;
        }
        if (null !== $this->containerResourceRequestShrink) {
            $res['ContainerResourceRequest'] = $this->containerResourceRequestShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNormalDeployConfigShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ContainerResourceLimit'])) {
            $model->containerResourceLimitShrink = $map['ContainerResourceLimit'];
        }
        if (isset($map['ContainerResourceRequest'])) {
            $model->containerResourceRequestShrink = $map['ContainerResourceRequest'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

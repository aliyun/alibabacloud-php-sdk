<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class SetDeployPauseTypeRequest extends Model
{
    /**
     * @var int
     */
    public $deployOrderId;

    /**
     * @var string
     */
    public $deployPauseType;
    protected $_name = [
        'deployOrderId'   => 'DeployOrderId',
        'deployPauseType' => 'DeployPauseType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployOrderId) {
            $res['DeployOrderId'] = $this->deployOrderId;
        }
        if (null !== $this->deployPauseType) {
            $res['DeployPauseType'] = $this->deployPauseType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDeployPauseTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployOrderId'])) {
            $model->deployOrderId = $map['DeployOrderId'];
        }
        if (isset($map['DeployPauseType'])) {
            $model->deployPauseType = $map['DeployPauseType'];
        }

        return $model;
    }
}

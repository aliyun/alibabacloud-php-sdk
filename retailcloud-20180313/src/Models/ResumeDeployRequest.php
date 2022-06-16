<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ResumeDeployRequest extends Model
{
    /**
     * @var int
     */
    public $deployOrderId;
    protected $_name = [
        'deployOrderId' => 'DeployOrderId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResumeDeployRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployOrderId'])) {
            $model->deployOrderId = $map['DeployOrderId'];
        }

        return $model;
    }
}

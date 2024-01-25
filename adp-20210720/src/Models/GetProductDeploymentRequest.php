<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GetProductDeploymentRequest extends Model
{
    /**
     * @example b8ec63af-7859-4464-9cff-xxx
     *
     * @var string
     */
    public $environmentUID;

    /**
     * @example de08f185-b117-4ff5-9335-xxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @example false
     *
     * @var bool
     */
    public $withParamConfig;
    protected $_name = [
        'environmentUID'    => 'environmentUID',
        'productVersionUID' => 'productVersionUID',
        'withParamConfig'   => 'withParamConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentUID) {
            $res['environmentUID'] = $this->environmentUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->withParamConfig) {
            $res['withParamConfig'] = $this->withParamConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductDeploymentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentUID'])) {
            $model->environmentUID = $map['environmentUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['withParamConfig'])) {
            $model->withParamConfig = $map['withParamConfig'];
        }

        return $model;
    }
}

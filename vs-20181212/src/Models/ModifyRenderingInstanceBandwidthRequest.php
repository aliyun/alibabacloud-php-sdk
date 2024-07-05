<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ModifyRenderingInstanceBandwidthRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $maxEgressBandwidth;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxIngressBandwidth;

    /**
     * @description This parameter is required.
     *
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'maxEgressBandwidth'  => 'MaxEgressBandwidth',
        'maxIngressBandwidth' => 'MaxIngressBandwidth',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxEgressBandwidth) {
            $res['MaxEgressBandwidth'] = $this->maxEgressBandwidth;
        }
        if (null !== $this->maxIngressBandwidth) {
            $res['MaxIngressBandwidth'] = $this->maxIngressBandwidth;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRenderingInstanceBandwidthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxEgressBandwidth'])) {
            $model->maxEgressBandwidth = $map['MaxEgressBandwidth'];
        }
        if (isset($map['MaxIngressBandwidth'])) {
            $model->maxIngressBandwidth = $map['MaxIngressBandwidth'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}

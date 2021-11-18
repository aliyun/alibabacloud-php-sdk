<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetUserConfigResponseBody extends Model
{
    /**
     * @description 当前版本
     *
     * @var string
     */
    public $currentFeatureVersion;

    /**
     * @description 是否启用v2功能
     *
     * @var bool
     */
    public $enableEmrCluster;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 是否显示特价版功能
     *
     * @var bool
     */
    public $useOnSaleVersion;

    /**
     * @description 是否使用团队版功能（v21）
     *
     * @var bool
     */
    public $useV21Feature;
    protected $_name = [
        'currentFeatureVersion' => 'CurrentFeatureVersion',
        'enableEmrCluster'      => 'EnableEmrCluster',
        'requestId'             => 'RequestId',
        'useOnSaleVersion'      => 'UseOnSaleVersion',
        'useV21Feature'         => 'UseV21Feature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentFeatureVersion) {
            $res['CurrentFeatureVersion'] = $this->currentFeatureVersion;
        }
        if (null !== $this->enableEmrCluster) {
            $res['EnableEmrCluster'] = $this->enableEmrCluster;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->useOnSaleVersion) {
            $res['UseOnSaleVersion'] = $this->useOnSaleVersion;
        }
        if (null !== $this->useV21Feature) {
            $res['UseV21Feature'] = $this->useV21Feature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentFeatureVersion'])) {
            $model->currentFeatureVersion = $map['CurrentFeatureVersion'];
        }
        if (isset($map['EnableEmrCluster'])) {
            $model->enableEmrCluster = $map['EnableEmrCluster'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UseOnSaleVersion'])) {
            $model->useOnSaleVersion = $map['UseOnSaleVersion'];
        }
        if (isset($map['UseV21Feature'])) {
            $model->useV21Feature = $map['UseV21Feature'];
        }

        return $model;
    }
}

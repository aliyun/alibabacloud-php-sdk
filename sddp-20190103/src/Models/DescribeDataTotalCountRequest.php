<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataTotalCountRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $countType;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $featureType;
    protected $_name = [
        'lang'        => 'Lang',
        'countType'   => 'CountType',
        'productCode' => 'ProductCode',
        'instanceId'  => 'InstanceId',
        'featureType' => 'FeatureType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->countType) {
            $res['CountType'] = $this->countType;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataTotalCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['CountType'])) {
            $model->countType = $map['CountType'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        return $model;
    }
}

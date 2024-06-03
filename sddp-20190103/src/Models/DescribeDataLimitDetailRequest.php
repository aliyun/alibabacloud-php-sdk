<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataLimitDetailRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The unique ID of the data asset that you want to query.
     *
     * This parameter is required.
     * @example 12300
     *
     * @var int
     */
    public $id;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Simplified Chinese.
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The network type of the data asset that you want to query. Valid values:
     *
     *   **1**: virtual private cloud (VPC)
     *   **2**: classic network
     *
     * @example 1
     *
     * @var int
     */
    public $networkType;
    protected $_name = [
        'featureType' => 'FeatureType',
        'id'          => 'Id',
        'lang'        => 'Lang',
        'networkType' => 'NetworkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataLimitDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        return $model;
    }
}

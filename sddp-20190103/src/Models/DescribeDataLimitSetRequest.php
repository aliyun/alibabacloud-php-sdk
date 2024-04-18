<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataLimitSetRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example 2
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh_cn**: Simplified Chinese (default)
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The parent asset ID of the data asset.
     *
     * You can call the [DescribeDataLimitDetail](~~DescribeDataLimitDetail~~) or [DescribeDataLimits](~~DescribeDataLimits~~) operation to obtain the parent asset ID of the data asset from the value of the **ParentId** parameter.
     * @example db
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The type of service to which the data asset belongs. Valid values:
     *
     *   **1**: MaxCompute
     *   **2**: OSS
     *   **3**: AnalyticDB for MySQL
     *   **4**: Tablestore
     *   **5**: ApsaraDB RDS
     *
     * @example 2
     *
     * @var int
     */
    public $resourceType;
    protected $_name = [
        'featureType'  => 'FeatureType',
        'lang'         => 'Lang',
        'parentId'     => 'ParentId',
        'resourceType' => 'ResourceType',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataLimitSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}

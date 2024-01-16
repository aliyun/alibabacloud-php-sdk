<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventTypesRequest extends Model
{
    /**
     * @var int
     */
    public $featureType;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of anomalous event for which you want to query the anomalous events of subtypes. Valid values:
     *
     *   **01**: anomalous permission usage
     *   **02**: anomalous data flow
     *   **03**: anomalous data operation
     *
     * @example 01
     *
     * @var int
     */
    public $parentTypeId;

    /**
     * @description The type of the resource. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates Object Storage Service (OSS). The value 3 indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 5
     *
     * @var int
     */
    public $resourceId;

    /**
     * @description The status of the anomalous event. Valid values:
     *
     *   **1**: enabled
     *   **2**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'featureType'  => 'FeatureType',
        'lang'         => 'Lang',
        'parentTypeId' => 'ParentTypeId',
        'resourceId'   => 'ResourceId',
        'status'       => 'Status',
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
        if (null !== $this->parentTypeId) {
            $res['ParentTypeId'] = $this->parentTypeId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventTypesRequest
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
        if (isset($map['ParentTypeId'])) {
            $model->parentTypeId = $map['ParentTypeId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

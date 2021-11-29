<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody\serviceInfo\clusterServiceSummaryList;

use AlibabaCloud\Tea\Model;

class clusterServiceSummary extends Model
{
    /**
     * @var string
     */
    public $alertInfo;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $desiredStoppedValue;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'alertInfo'           => 'AlertInfo',
        'category'            => 'Category',
        'desiredStoppedValue' => 'DesiredStoppedValue',
        'displayName'         => 'DisplayName',
        'key'                 => 'Key',
        'status'              => 'Status',
        'type'                => 'Type',
        'value'               => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertInfo) {
            $res['AlertInfo'] = $this->alertInfo;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->desiredStoppedValue) {
            $res['DesiredStoppedValue'] = $this->desiredStoppedValue;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterServiceSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertInfo'])) {
            $model->alertInfo = $map['AlertInfo'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DesiredStoppedValue'])) {
            $model->desiredStoppedValue = $map['DesiredStoppedValue'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

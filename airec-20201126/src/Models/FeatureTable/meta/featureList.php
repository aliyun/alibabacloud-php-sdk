<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\FeatureTable\meta;

use AlibabaCloud\Tea\Model;

class featureList extends Model
{
    /**
     * @example com11
     *
     * @var string
     */
    public $comment;

    /**
     * @example fn11
     *
     * @var string
     */
    public $featureName;

    /**
     * @example fieldName11
     *
     * @var string
     */
    public $fieldName;

    /**
     * @example NotApplied 未应用 Applied 已应用
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'comment'     => 'Comment',
        'featureName' => 'FeatureName',
        'fieldName'   => 'FieldName',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

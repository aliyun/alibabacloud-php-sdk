<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeEventTypesRequest extends Model
{
    /**
     * @var int
     */
    public $featureType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $parentTypeId;

    /**
     * @var int
     */
    public $resourceId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'featureType' => 'FeatureType',
        'lang' => 'Lang',
        'parentTypeId' => 'ParentTypeId',
        'resourceId' => 'ResourceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

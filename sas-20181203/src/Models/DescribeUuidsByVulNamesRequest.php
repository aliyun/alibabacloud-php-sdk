<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeUuidsByVulNamesRequest extends Model
{
    /**
     * @var string
     */
    public $dealed;
    /**
     * @var string
     */
    public $fieldName;
    /**
     * @var string
     */
    public $fieldValue;
    /**
     * @var int
     */
    public $groupId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $necessity;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $searchTags;
    /**
     * @var string
     */
    public $statusList;
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $vpcInstanceIds;
    /**
     * @var string[]
     */
    public $vulNames;
    protected $_name = [
        'dealed'         => 'Dealed',
        'fieldName'      => 'FieldName',
        'fieldValue'     => 'FieldValue',
        'groupId'        => 'GroupId',
        'lang'           => 'Lang',
        'level'          => 'Level',
        'necessity'      => 'Necessity',
        'remark'         => 'Remark',
        'searchTags'     => 'SearchTags',
        'statusList'     => 'StatusList',
        'tag'            => 'Tag',
        'targetType'     => 'TargetType',
        'type'           => 'Type',
        'vpcInstanceIds' => 'VpcInstanceIds',
        'vulNames'       => 'VulNames',
    ];

    public function validate()
    {
        if (\is_array($this->vulNames)) {
            Model::validateArray($this->vulNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->searchTags) {
            $res['SearchTags'] = $this->searchTags;
        }

        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vpcInstanceIds) {
            $res['VpcInstanceIds'] = $this->vpcInstanceIds;
        }

        if (null !== $this->vulNames) {
            if (\is_array($this->vulNames)) {
                $res['VulNames'] = [];
                $n1              = 0;
                foreach ($this->vulNames as $item1) {
                    $res['VulNames'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SearchTags'])) {
            $model->searchTags = $map['SearchTags'];
        }

        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VpcInstanceIds'])) {
            $model->vpcInstanceIds = $map['VpcInstanceIds'];
        }

        if (isset($map['VulNames'])) {
            if (!empty($map['VulNames'])) {
                $model->vulNames = [];
                $n1              = 0;
                foreach ($map['VulNames'] as $item1) {
                    $model->vulNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

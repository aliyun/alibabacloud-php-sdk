<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeEventLevelCountRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $containerFieldName;

    /**
     * @var string
     */
    public $containerFieldValue;

    /**
     * @var string
     */
    public $containerIds;

    /**
     * @var string
     */
    public $from;

    /**
     * @var int
     */
    public $multiAccountActionType;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'containerFieldName' => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'containerIds' => 'ContainerIds',
        'from' => 'From',
        'multiAccountActionType' => 'MultiAccountActionType',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }

        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }

        if (null !== $this->containerIds) {
            $res['ContainerIds'] = $this->containerIds;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->multiAccountActionType) {
            $res['MultiAccountActionType'] = $this->multiAccountActionType;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }

        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }

        if (isset($map['ContainerIds'])) {
            $model->containerIds = $map['ContainerIds'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['MultiAccountActionType'])) {
            $model->multiAccountActionType = $map['MultiAccountActionType'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponseBody\changeLogs;

use AlibabaCloud\Dara\Model;

class changeLog extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorSubType;

    /**
     * @var string
     */
    public $creatorType;

    /**
     * @var string
     */
    public $creatorUserId;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $operAction;

    /**
     * @var string
     */
    public $operIp;

    /**
     * @var string
     */
    public $operObject;

    /**
     * @var string
     */
    public $operTime;

    /**
     * @var int
     */
    public $operTimestamp;
    protected $_name = [
        'content' => 'Content',
        'creatorId' => 'CreatorId',
        'creatorSubType' => 'CreatorSubType',
        'creatorType' => 'CreatorType',
        'creatorUserId' => 'CreatorUserId',
        'entityId' => 'EntityId',
        'entityName' => 'EntityName',
        'id' => 'Id',
        'operAction' => 'OperAction',
        'operIp' => 'OperIp',
        'operObject' => 'OperObject',
        'operTime' => 'OperTime',
        'operTimestamp' => 'OperTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorSubType) {
            $res['CreatorSubType'] = $this->creatorSubType;
        }

        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
        }

        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->operAction) {
            $res['OperAction'] = $this->operAction;
        }

        if (null !== $this->operIp) {
            $res['OperIp'] = $this->operIp;
        }

        if (null !== $this->operObject) {
            $res['OperObject'] = $this->operObject;
        }

        if (null !== $this->operTime) {
            $res['OperTime'] = $this->operTime;
        }

        if (null !== $this->operTimestamp) {
            $res['OperTimestamp'] = $this->operTimestamp;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['CreatorSubType'])) {
            $model->creatorSubType = $map['CreatorSubType'];
        }

        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
        }

        if (isset($map['CreatorUserId'])) {
            $model->creatorUserId = $map['CreatorUserId'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OperAction'])) {
            $model->operAction = $map['OperAction'];
        }

        if (isset($map['OperIp'])) {
            $model->operIp = $map['OperIp'];
        }

        if (isset($map['OperObject'])) {
            $model->operObject = $map['OperObject'];
        }

        if (isset($map['OperTime'])) {
            $model->operTime = $map['OperTime'];
        }

        if (isset($map['OperTimestamp'])) {
            $model->operTimestamp = $map['OperTimestamp'];
        }

        return $model;
    }
}

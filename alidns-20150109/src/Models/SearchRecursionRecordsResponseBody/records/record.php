<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchRecursionRecordsResponseBody\records;

use AlibabaCloud\Dara\Model;

class record extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var int
     */
    public $creator;

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
    public $enableStatus;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $requestSource;

    /**
     * @var string
     */
    public $rr;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $weight;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'creator' => 'Creator',
        'creatorSubType' => 'CreatorSubType',
        'creatorType' => 'CreatorType',
        'enableStatus' => 'EnableStatus',
        'priority' => 'Priority',
        'recordId' => 'RecordId',
        'remark' => 'Remark',
        'requestSource' => 'RequestSource',
        'rr' => 'Rr',
        'ttl' => 'Ttl',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'value' => 'Value',
        'weight' => 'Weight',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorSubType) {
            $res['CreatorSubType'] = $this->creatorSubType;
        }

        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->requestSource) {
            $res['RequestSource'] = $this->requestSource;
        }

        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorSubType'])) {
            $model->creatorSubType = $map['CreatorSubType'];
        }

        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RequestSource'])) {
            $model->requestSource = $map['RequestSource'];
        }

        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

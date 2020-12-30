<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveVersionOfConfigGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $configGroupId;

    /**
     * @var string
     */
    public $baseVersionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $seqId;
    protected $_name = [
        'status'        => 'Status',
        'versionId'     => 'VersionId',
        'operator'      => 'Operator',
        'configGroupId' => 'ConfigGroupId',
        'baseVersionId' => 'BaseVersionId',
        'description'   => 'Description',
        'requestId'     => 'RequestId',
        'createTime'    => 'CreateTime',
        'updateTime'    => 'UpdateTime',
        'seqId'         => 'SeqId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->configGroupId) {
            $res['ConfigGroupId'] = $this->configGroupId;
        }
        if (null !== $this->baseVersionId) {
            $res['BaseVersionId'] = $this->baseVersionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->seqId) {
            $res['SeqId'] = $this->seqId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveVersionOfConfigGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ConfigGroupId'])) {
            $model->configGroupId = $map['ConfigGroupId'];
        }
        if (isset($map['BaseVersionId'])) {
            $model->baseVersionId = $map['BaseVersionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['SeqId'])) {
            $model->seqId = $map['SeqId'];
        }

        return $model;
    }
}

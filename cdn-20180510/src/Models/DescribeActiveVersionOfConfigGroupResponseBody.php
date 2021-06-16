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
    public $updateTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $seqId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $configGroupId;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $baseVersionId;
    protected $_name = [
        'status'        => 'Status',
        'updateTime'    => 'UpdateTime',
        'requestId'     => 'RequestId',
        'seqId'         => 'SeqId',
        'description'   => 'Description',
        'createTime'    => 'CreateTime',
        'versionId'     => 'VersionId',
        'configGroupId' => 'ConfigGroupId',
        'operator'      => 'Operator',
        'baseVersionId' => 'BaseVersionId',
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->seqId) {
            $res['SeqId'] = $this->seqId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->configGroupId) {
            $res['ConfigGroupId'] = $this->configGroupId;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->baseVersionId) {
            $res['BaseVersionId'] = $this->baseVersionId;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SeqId'])) {
            $model->seqId = $map['SeqId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['ConfigGroupId'])) {
            $model->configGroupId = $map['ConfigGroupId'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['BaseVersionId'])) {
            $model->baseVersionId = $map['BaseVersionId'];
        }

        return $model;
    }
}

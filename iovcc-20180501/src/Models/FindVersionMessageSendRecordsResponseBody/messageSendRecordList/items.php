<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionMessageSendRecordsResponseBody\messageSendRecordList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $resultDesc;

    /**
     * @var string
     */
    public $succeededCount;

    /**
     * @var string
     */
    public $failedCount;

    /**
     * @var string
     */
    public $skippedCount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;
    protected $_name = [
        'id'                 => 'Id',
        'messageType'        => 'MessageType',
        'versionId'          => 'VersionId',
        'targetId'           => 'TargetId',
        'result'             => 'Result',
        'resultDesc'         => 'ResultDesc',
        'succeededCount'     => 'SucceededCount',
        'failedCount'        => 'FailedCount',
        'skippedCount'       => 'SkippedCount',
        'gmtCreate'          => 'GmtCreate',
        'gmtCreateTimestamp' => 'GmtCreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->resultDesc) {
            $res['ResultDesc'] = $this->resultDesc;
        }
        if (null !== $this->succeededCount) {
            $res['SucceededCount'] = $this->succeededCount;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->skippedCount) {
            $res['SkippedCount'] = $this->skippedCount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ResultDesc'])) {
            $model->resultDesc = $map['ResultDesc'];
        }
        if (isset($map['SucceededCount'])) {
            $model->succeededCount = $map['SucceededCount'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['SkippedCount'])) {
            $model->skippedCount = $map['SkippedCount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }

        return $model;
    }
}

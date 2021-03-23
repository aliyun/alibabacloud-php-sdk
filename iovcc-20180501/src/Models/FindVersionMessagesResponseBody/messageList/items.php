<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionMessagesResponseBody\messageList;

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
    public $messageId;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $testId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var int
     */
    public $gmtModifyTimestamp;
    protected $_name = [
        'id'                 => 'Id',
        'messageId'          => 'MessageId',
        'versionId'          => 'VersionId',
        'testId'             => 'TestId',
        'status'             => 'Status',
        'statusDesc'         => 'StatusDesc',
        'deviceId'           => 'DeviceId',
        'gmtCreate'          => 'GmtCreate',
        'gmtModify'          => 'GmtModify',
        'gmtCreateTimestamp' => 'GmtCreateTimestamp',
        'gmtModifyTimestamp' => 'GmtModifyTimestamp',
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
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifyTimestamp) {
            $res['GmtModifyTimestamp'] = $this->gmtModifyTimestamp;
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
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifyTimestamp'])) {
            $model->gmtModifyTimestamp = $map['GmtModifyTimestamp'];
        }

        return $model;
    }
}

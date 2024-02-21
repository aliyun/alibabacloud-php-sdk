<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetEndpointSwitchTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $dbLinkId;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $oriUuid;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accountId' => 'AccountId',
        'dbLinkId'  => 'DbLinkId',
        'errMsg'    => 'ErrMsg',
        'oriUuid'   => 'OriUuid',
        'status'    => 'Status',
        'taskId'    => 'TaskId',
        'uuid'      => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->dbLinkId) {
            $res['DbLinkId'] = $this->dbLinkId;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->oriUuid) {
            $res['OriUuid'] = $this->oriUuid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DbLinkId'])) {
            $model->dbLinkId = $map['DbLinkId'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['OriUuid'])) {
            $model->oriUuid = $map['OriUuid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

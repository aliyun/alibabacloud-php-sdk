<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceIniBackup extends Model
{
    /**
     * @var string
     */
    public $ext;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $processStatus;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'ext' => 'ext',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'grafanaWorkspaceId' => 'grafanaWorkspaceId',
        'id' => 'id',
        'msg' => 'msg',
        'processName' => 'processName',
        'processStatus' => 'processStatus',
        'subType' => 'subType',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ext) {
            $res['ext'] = $this->ext;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->grafanaWorkspaceId) {
            $res['grafanaWorkspaceId'] = $this->grafanaWorkspaceId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }

        if (null !== $this->processName) {
            $res['processName'] = $this->processName;
        }

        if (null !== $this->processStatus) {
            $res['processStatus'] = $this->processStatus;
        }

        if (null !== $this->subType) {
            $res['subType'] = $this->subType;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['ext'])) {
            $model->ext = $map['ext'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['grafanaWorkspaceId'])) {
            $model->grafanaWorkspaceId = $map['grafanaWorkspaceId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }

        if (isset($map['processName'])) {
            $model->processName = $map['processName'];
        }

        if (isset($map['processStatus'])) {
            $model->processStatus = $map['processStatus'];
        }

        if (isset($map['subType'])) {
            $model->subType = $map['subType'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}

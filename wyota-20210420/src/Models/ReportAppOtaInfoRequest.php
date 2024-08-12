<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ReportAppOtaInfoRequest extends Model
{
    /**
     * @var string
     */
    public $baseVersion;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $clientUid;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $project;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $targetVersion;

    /**
     * @var string
     */
    public $taskUid;
    protected $_name = [
        'baseVersion'   => 'BaseVersion',
        'clientType'    => 'ClientType',
        'clientUid'     => 'ClientUid',
        'note'          => 'Note',
        'osType'        => 'OsType',
        'project'       => 'Project',
        'status'        => 'Status',
        'targetVersion' => 'TargetVersion',
        'taskUid'       => 'TaskUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseVersion) {
            $res['BaseVersion'] = $this->baseVersion;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->clientUid) {
            $res['ClientUid'] = $this->clientUid;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetVersion) {
            $res['TargetVersion'] = $this->targetVersion;
        }
        if (null !== $this->taskUid) {
            $res['TaskUid'] = $this->taskUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportAppOtaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseVersion'])) {
            $model->baseVersion = $map['BaseVersion'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ClientUid'])) {
            $model->clientUid = $map['ClientUid'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetVersion'])) {
            $model->targetVersion = $map['TargetVersion'];
        }
        if (isset($map['TaskUid'])) {
            $model->taskUid = $map['TaskUid'];
        }

        return $model;
    }
}

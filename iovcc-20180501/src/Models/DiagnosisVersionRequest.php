<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DiagnosisVersionRequest extends Model
{
    /**
     * @var string
     */
    public $originalId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $versionType;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $diagnoseStyle;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;
    protected $_name = [
        'originalId'    => 'OriginalId',
        'projectId'     => 'ProjectId',
        'versionType'   => 'VersionType',
        'versionId'     => 'VersionId',
        'idType'        => 'IdType',
        'diagnoseStyle' => 'DiagnoseStyle',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalId) {
            $res['OriginalId'] = $this->originalId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->diagnoseStyle) {
            $res['DiagnoseStyle'] = $this->diagnoseStyle;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiagnosisVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalId'])) {
            $model->originalId = $map['OriginalId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['DiagnoseStyle'])) {
            $model->diagnoseStyle = $map['DiagnoseStyle'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}

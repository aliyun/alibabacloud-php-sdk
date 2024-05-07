<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class UploadReportRequest extends Model
{
    /**
     * @example 90c2459a-4c73-4ab7-8a6b-e550d62fbd8c
     *
     * @var string
     */
    public $appId;

    /**
     * @example {"version":"1.0.0"}
     *
     * @var string
     */
    public $clientBaseParam;

    /**
     * @example 1.0.003
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example iuhptk3w-2021122017
     *
     * @var string
     */
    public $detectProcessId;

    /**
     * @example 12
     *
     * @var int
     */
    public $duration;

    /**
     * @example 6c94f2a7-632d-4ea0-aa06-a97800a9060f
     *
     * @var string
     */
    public $feeId;

    /**
     * @example http://abc.oss.aliyuncs.com/1/12_03_20_03_36toubaoren.mp4.meta
     *
     * @var string
     */
    public $metaUrl;

    /**
     * @example ads32efef43
     *
     * @var string
     */
    public $outerBusinessId;

    /**
     * @example 2022-01-04T08%3A45%3A37Z
     *
     * @var string
     */
    public $recordAt;

    /**
     * @example http://abc.oss.aliyuncs.com/1/12_03_20_03_36toubaoren.mp4.json
     *
     * @var string
     */
    public $resultUrl;

    /**
     * @var string
     */
    public $role;

    /**
     * @example 6000028888875
     *
     * @var string
     */
    public $roomId;

    /**
     * @example record_6570315480571566****
     *
     * @var string
     */
    public $rtcRecordId;

    /**
     * @example LOCAL
     *
     * @var string
     */
    public $type;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad34
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $videoType;

    /**
     * @example https://mogo-apps-sh.oss-cn-shanghai-internal.aliyuncs.com/tmp/d2720028b53d384c6d3fca32e45209d1_20_src.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'appId'           => 'AppId',
        'clientBaseParam' => 'ClientBaseParam',
        'clientVersion'   => 'ClientVersion',
        'departmentId'    => 'DepartmentId',
        'detectProcessId' => 'DetectProcessId',
        'duration'        => 'Duration',
        'feeId'           => 'FeeId',
        'metaUrl'         => 'MetaUrl',
        'outerBusinessId' => 'OuterBusinessId',
        'recordAt'        => 'RecordAt',
        'resultUrl'       => 'ResultUrl',
        'role'            => 'Role',
        'roomId'          => 'RoomId',
        'rtcRecordId'     => 'RtcRecordId',
        'type'            => 'Type',
        'userId'          => 'UserId',
        'videoType'       => 'VideoType',
        'videoUrl'        => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientBaseParam) {
            $res['ClientBaseParam'] = $this->clientBaseParam;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->detectProcessId) {
            $res['DetectProcessId'] = $this->detectProcessId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->feeId) {
            $res['FeeId'] = $this->feeId;
        }
        if (null !== $this->metaUrl) {
            $res['MetaUrl'] = $this->metaUrl;
        }
        if (null !== $this->outerBusinessId) {
            $res['OuterBusinessId'] = $this->outerBusinessId;
        }
        if (null !== $this->recordAt) {
            $res['RecordAt'] = $this->recordAt;
        }
        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->rtcRecordId) {
            $res['RtcRecordId'] = $this->rtcRecordId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->videoType) {
            $res['VideoType'] = $this->videoType;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientBaseParam'])) {
            $model->clientBaseParam = $map['ClientBaseParam'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['DetectProcessId'])) {
            $model->detectProcessId = $map['DetectProcessId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FeeId'])) {
            $model->feeId = $map['FeeId'];
        }
        if (isset($map['MetaUrl'])) {
            $model->metaUrl = $map['MetaUrl'];
        }
        if (isset($map['OuterBusinessId'])) {
            $model->outerBusinessId = $map['OuterBusinessId'];
        }
        if (isset($map['RecordAt'])) {
            $model->recordAt = $map['RecordAt'];
        }
        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['RtcRecordId'])) {
            $model->rtcRecordId = $map['RtcRecordId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VideoType'])) {
            $model->videoType = $map['VideoType'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}

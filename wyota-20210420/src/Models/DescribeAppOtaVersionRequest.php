<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class DescribeAppOtaVersionRequest extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $nullChannel;

    /**
     * @var int
     */
    public $otaType;

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
    public $versionUid;
    protected $_name = [
        'appVersion' => 'AppVersion',
        'channel' => 'Channel',
        'clientType' => 'ClientType',
        'creator' => 'Creator',
        'nullChannel' => 'NullChannel',
        'otaType' => 'OtaType',
        'project' => 'Project',
        'status' => 'Status',
        'versionUid' => 'VersionUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->nullChannel) {
            $res['NullChannel'] = $this->nullChannel;
        }

        if (null !== $this->otaType) {
            $res['OtaType'] = $this->otaType;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->versionUid) {
            $res['VersionUid'] = $this->versionUid;
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
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['NullChannel'])) {
            $model->nullChannel = $map['NullChannel'];
        }

        if (isset($map['OtaType'])) {
            $model->otaType = $map['OtaType'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VersionUid'])) {
            $model->versionUid = $map['VersionUid'];
        }

        return $model;
    }
}

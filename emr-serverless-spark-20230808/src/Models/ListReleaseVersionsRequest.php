<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListReleaseVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $releaseType;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var string
     */
    public $releaseVersionStatus;

    /**
     * @var string
     */
    public $serviceFilter;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'regionId' => 'regionId',
        'releaseType' => 'releaseType',
        'releaseVersion' => 'releaseVersion',
        'releaseVersionStatus' => 'releaseVersionStatus',
        'serviceFilter' => 'serviceFilter',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->releaseType) {
            $res['releaseType'] = $this->releaseType;
        }

        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }

        if (null !== $this->releaseVersionStatus) {
            $res['releaseVersionStatus'] = $this->releaseVersionStatus;
        }

        if (null !== $this->serviceFilter) {
            $res['serviceFilter'] = $this->serviceFilter;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['releaseType'])) {
            $model->releaseType = $map['releaseType'];
        }

        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }

        if (isset($map['releaseVersionStatus'])) {
            $model->releaseVersionStatus = $map['releaseVersionStatus'];
        }

        if (isset($map['serviceFilter'])) {
            $model->serviceFilter = $map['serviceFilter'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}

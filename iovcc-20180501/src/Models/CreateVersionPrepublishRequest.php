<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateVersionPrepublishRequest extends Model
{
    /**
     * @var string
     */
    public $isTotalPrepublish;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $versionType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $barrierCount;
    protected $_name = [
        'isTotalPrepublish' => 'IsTotalPrepublish',
        'versionId'         => 'VersionId',
        'versionType'       => 'VersionType',
        'name'              => 'Name',
        'projectId'         => 'ProjectId',
        'barrierCount'      => 'BarrierCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTotalPrepublish) {
            $res['IsTotalPrepublish'] = $this->isTotalPrepublish;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->barrierCount) {
            $res['BarrierCount'] = $this->barrierCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVersionPrepublishRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTotalPrepublish'])) {
            $model->isTotalPrepublish = $map['IsTotalPrepublish'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['BarrierCount'])) {
            $model->barrierCount = $map['BarrierCount'];
        }

        return $model;
    }
}

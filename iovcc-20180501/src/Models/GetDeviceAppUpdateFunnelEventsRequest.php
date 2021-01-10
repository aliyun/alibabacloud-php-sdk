<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceAppUpdateFunnelEventsRequest extends Model
{
    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $targetVersionCode;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $originalId;
    protected $_name = [
        'packageName'       => 'PackageName',
        'projectId'         => 'ProjectId',
        'targetVersionCode' => 'TargetVersionCode',
        'idType'            => 'IdType',
        'originalId'        => 'OriginalId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->targetVersionCode) {
            $res['TargetVersionCode'] = $this->targetVersionCode;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->originalId) {
            $res['OriginalId'] = $this->originalId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceAppUpdateFunnelEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TargetVersionCode'])) {
            $model->targetVersionCode = $map['TargetVersionCode'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['OriginalId'])) {
            $model->originalId = $map['OriginalId'];
        }

        return $model;
    }
}

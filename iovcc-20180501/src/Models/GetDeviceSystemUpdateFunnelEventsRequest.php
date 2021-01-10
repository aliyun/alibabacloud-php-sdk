<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceSystemUpdateFunnelEventsRequest extends Model
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
    public $targetVersion;

    /**
     * @var string
     */
    public $idType;
    protected $_name = [
        'originalId'    => 'OriginalId',
        'projectId'     => 'ProjectId',
        'targetVersion' => 'TargetVersion',
        'idType'        => 'IdType',
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
        if (null !== $this->targetVersion) {
            $res['TargetVersion'] = $this->targetVersion;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceSystemUpdateFunnelEventsRequest
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
        if (isset($map['TargetVersion'])) {
            $model->targetVersion = $map['TargetVersion'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class OperateAvatarProjectRequest extends Model
{
    /**
     * @example DELETE
     *
     * @var string
     */
    public $operateType;

    /**
     * @example 812907463682949120
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 1
     *
     * @var int
     */
    public $resChannelNumber;

    /**
     * @example FREE
     *
     * @var string
     */
    public $resType;
    protected $_name = [
        'operateType'      => 'operateType',
        'projectId'        => 'projectId',
        'resChannelNumber' => 'resChannelNumber',
        'resType'          => 'resType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateType) {
            $res['operateType'] = $this->operateType;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->resChannelNumber) {
            $res['resChannelNumber'] = $this->resChannelNumber;
        }
        if (null !== $this->resType) {
            $res['resType'] = $this->resType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateAvatarProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operateType'])) {
            $model->operateType = $map['operateType'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['resChannelNumber'])) {
            $model->resChannelNumber = $map['resChannelNumber'];
        }
        if (isset($map['resType'])) {
            $model->resType = $map['resType'];
        }

        return $model;
    }
}

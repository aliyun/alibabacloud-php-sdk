<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class OperateAvatarProjectRequest extends Model
{
    /**
     * @var string
     */
    public $operateType;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var int
     */
    public $resChannelNumber;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

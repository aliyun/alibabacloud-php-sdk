<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CheckFinishMissionRequest extends Model
{
    /**
     * @var string
     */
    public $missionType;
    protected $_name = [
        'missionType' => 'MissionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->missionType) {
            $res['MissionType'] = $this->missionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckFinishMissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MissionType'])) {
            $model->missionType = $map['MissionType'];
        }

        return $model;
    }
}

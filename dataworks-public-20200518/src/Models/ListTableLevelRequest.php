<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListTableLevelRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $levelType;
    protected $_name = [
        'projectId' => 'ProjectId',
        'levelType' => 'LevelType',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('levelType', $this->levelType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTableLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }

        return $model;
    }
}

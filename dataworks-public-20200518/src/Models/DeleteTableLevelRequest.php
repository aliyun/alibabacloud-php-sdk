<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteTableLevelRequest extends Model
{
    /**
     * @description The ID of the table level that you want to delete. You can call the ListTableLevel operation to query the ID.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $levelId;

    /**
     * @description The DataWorks workspace ID.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'levelId'   => 'LevelId',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->levelId) {
            $res['LevelId'] = $this->levelId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTableLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LevelId'])) {
            $model->levelId = $map['LevelId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

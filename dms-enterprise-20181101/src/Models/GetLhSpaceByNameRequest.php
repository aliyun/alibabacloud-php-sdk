<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetLhSpaceByNameRequest extends Model
{
    /**
     * @description Indicates whether the workspace is deleted. Valid values:
     *
     *   **true**: The workspace is deleted.
     *   **false**: The workspace is not deleted.
     *
     * @example test_space
     *
     * @var string
     */
    public $spaceName;

    /**
     * @description The type of the database. Valid values:
     *
     *   **14**: AnalyticDB for MySQL
     *   **18**: AnalyticDB for PostgreSQL
     *
     * @example 3000
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'spaceName' => 'SpaceName',
        'tid'       => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceName) {
            $res['SpaceName'] = $this->spaceName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLhSpaceByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceName'])) {
            $model->spaceName = $map['SpaceName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}

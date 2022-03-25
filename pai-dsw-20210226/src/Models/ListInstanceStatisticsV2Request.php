<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceStatisticsV2Request extends Model
{
    /**
     * @description 工作空间列表
     *
     * @var string
     */
    public $workspaceIds;
    protected $_name = [
        'workspaceIds' => 'WorkspaceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workspaceIds) {
            $res['WorkspaceIds'] = $this->workspaceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceStatisticsV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkspaceIds'])) {
            $model->workspaceIds = $map['WorkspaceIds'];
        }

        return $model;
    }
}

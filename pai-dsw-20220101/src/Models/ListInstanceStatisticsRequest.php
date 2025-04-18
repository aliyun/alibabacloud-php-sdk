<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ListInstanceStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $workspaceIds;
    protected $_name = [
        'workspaceIds' => 'WorkspaceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workspaceIds) {
            $res['WorkspaceIds'] = $this->workspaceIds;
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
        if (isset($map['WorkspaceIds'])) {
            $model->workspaceIds = $map['WorkspaceIds'];
        }

        return $model;
    }
}

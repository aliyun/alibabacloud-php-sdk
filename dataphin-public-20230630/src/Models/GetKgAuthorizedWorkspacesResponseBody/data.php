<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetKgAuthorizedWorkspacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetKgAuthorizedWorkspacesResponseBody\data\workspaceList;

class data extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var workspaceList[]
     */
    public $workspaceList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'workspaceList' => 'WorkspaceList',
    ];

    public function validate()
    {
        if (\is_array($this->workspaceList)) {
            Model::validateArray($this->workspaceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->workspaceList) {
            if (\is_array($this->workspaceList)) {
                $res['WorkspaceList'] = [];
                $n1 = 0;
                foreach ($this->workspaceList as $item1) {
                    $res['WorkspaceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WorkspaceList'])) {
            if (!empty($map['WorkspaceList'])) {
                $model->workspaceList = [];
                $n1 = 0;
                foreach ($map['WorkspaceList'] as $item1) {
                    $model->workspaceList[$n1] = workspaceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

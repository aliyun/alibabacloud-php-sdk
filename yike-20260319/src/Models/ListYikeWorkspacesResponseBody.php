<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260319\Models\ListYikeWorkspacesResponseBody\workspaceList;

class ListYikeWorkspacesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var workspaceList[]
     */
    public $workspaceList;
    protected $_name = [
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

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

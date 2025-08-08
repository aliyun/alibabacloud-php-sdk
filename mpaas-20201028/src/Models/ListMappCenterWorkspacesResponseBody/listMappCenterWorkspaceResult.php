<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterWorkspacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterWorkspacesResponseBody\listMappCenterWorkspaceResult\mappCenterWorkspaceList;

class listMappCenterWorkspaceResult extends Model
{
    /**
     * @var mappCenterWorkspaceList[]
     */
    public $mappCenterWorkspaceList;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'mappCenterWorkspaceList' => 'MappCenterWorkspaceList',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->mappCenterWorkspaceList)) {
            Model::validateArray($this->mappCenterWorkspaceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mappCenterWorkspaceList) {
            if (\is_array($this->mappCenterWorkspaceList)) {
                $res['MappCenterWorkspaceList'] = [];
                $n1 = 0;
                foreach ($this->mappCenterWorkspaceList as $item1) {
                    $res['MappCenterWorkspaceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['MappCenterWorkspaceList'])) {
            if (!empty($map['MappCenterWorkspaceList'])) {
                $model->mappCenterWorkspaceList = [];
                $n1 = 0;
                foreach ($map['MappCenterWorkspaceList'] as $item1) {
                    $model->mappCenterWorkspaceList[$n1] = mappCenterWorkspaceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

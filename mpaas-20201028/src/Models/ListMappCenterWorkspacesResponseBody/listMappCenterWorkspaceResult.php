<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterWorkspacesResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterWorkspacesResponseBody\listMappCenterWorkspaceResult\mappCenterWorkspaceList;
use AlibabaCloud\Tea\Model;

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
        'resultMsg'               => 'ResultMsg',
        'success'                 => 'Success',
        'userId'                  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappCenterWorkspaceList) {
            $res['MappCenterWorkspaceList'] = [];
            if (null !== $this->mappCenterWorkspaceList && \is_array($this->mappCenterWorkspaceList)) {
                $n = 0;
                foreach ($this->mappCenterWorkspaceList as $item) {
                    $res['MappCenterWorkspaceList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return listMappCenterWorkspaceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MappCenterWorkspaceList'])) {
            if (!empty($map['MappCenterWorkspaceList'])) {
                $model->mappCenterWorkspaceList = [];
                $n                              = 0;
                foreach ($map['MappCenterWorkspaceList'] as $item) {
                    $model->mappCenterWorkspaceList[$n++] = null !== $item ? mappCenterWorkspaceList::fromMap($item) : $item;
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

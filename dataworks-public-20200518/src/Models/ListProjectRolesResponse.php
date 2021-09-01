<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectRolesResponse\projectRoleList;
use AlibabaCloud\Tea\Model;

class ListProjectRolesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var projectRoleList[]
     */
    public $projectRoleList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'projectRoleList' => 'ProjectRoleList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('projectRoleList', $this->projectRoleList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->projectRoleList) {
            $res['ProjectRoleList'] = [];
            if (null !== $this->projectRoleList && \is_array($this->projectRoleList)) {
                $n = 0;
                foreach ($this->projectRoleList as $item) {
                    $res['ProjectRoleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectRolesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProjectRoleList'])) {
            if (!empty($map['ProjectRoleList'])) {
                $model->projectRoleList = [];
                $n                      = 0;
                foreach ($map['ProjectRoleList'] as $item) {
                    $model->projectRoleList[$n++] = null !== $item ? projectRoleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

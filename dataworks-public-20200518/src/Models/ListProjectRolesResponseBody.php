<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectRolesResponseBody\projectRoleList;

class ListProjectRolesResponseBody extends Model
{
    /**
     * @var projectRoleList[]
     */
    public $projectRoleList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectRoleList' => 'ProjectRoleList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->projectRoleList)) {
            Model::validateArray($this->projectRoleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectRoleList) {
            if (\is_array($this->projectRoleList)) {
                $res['ProjectRoleList'] = [];
                $n1 = 0;
                foreach ($this->projectRoleList as $item1) {
                    $res['ProjectRoleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ProjectRoleList'])) {
            if (!empty($map['ProjectRoleList'])) {
                $model->projectRoleList = [];
                $n1 = 0;
                foreach ($map['ProjectRoleList'] as $item1) {
                    $model->projectRoleList[$n1] = projectRoleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

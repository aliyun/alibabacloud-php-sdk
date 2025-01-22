<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListUserGroupsResponseBody\userGroups;

class ListUserGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalNum;
    /**
     * @var userGroups[]
     */
    public $userGroups;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalNum'   => 'TotalNum',
        'userGroups' => 'UserGroups',
    ];

    public function validate()
    {
        if (\is_array($this->userGroups)) {
            Model::validateArray($this->userGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        if (null !== $this->userGroups) {
            if (\is_array($this->userGroups)) {
                $res['UserGroups'] = [];
                $n1                = 0;
                foreach ($this->userGroups as $item1) {
                    $res['UserGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = [];
                $n1                = 0;
                foreach ($map['UserGroups'] as $item1) {
                    $model->userGroups[$n1++] = userGroups::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetUsersRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'userIdList' => 'UserIdList',
    ];

    public function validate()
    {
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->userIdList) {
            if (\is_array($this->userIdList)) {
                $res['UserIdList'] = [];
                $n1 = 0;
                foreach ($this->userIdList as $item1) {
                    $res['UserIdList'][$n1] = $item1;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = [];
                $n1 = 0;
                foreach ($map['UserIdList'] as $item1) {
                    $model->userIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

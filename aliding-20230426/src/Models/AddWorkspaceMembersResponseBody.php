<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class AddWorkspaceMembersResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $notInOrgList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notInOrgList' => 'NotInOrgList',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->notInOrgList)) {
            Model::validateArray($this->notInOrgList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notInOrgList) {
            if (\is_array($this->notInOrgList)) {
                $res['NotInOrgList'] = [];
                $n1 = 0;
                foreach ($this->notInOrgList as $item1) {
                    $res['NotInOrgList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['NotInOrgList'])) {
            if (!empty($map['NotInOrgList'])) {
                $model->notInOrgList = [];
                $n1 = 0;
                foreach ($map['NotInOrgList'] as $item1) {
                    $model->notInOrgList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class UpdateMergeRequestPersonnelRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string[]
     */
    public $newUserIdList;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken' => 'accessToken',
        'newUserIdList' => 'newUserIdList',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
        if (\is_array($this->newUserIdList)) {
            Model::validateArray($this->newUserIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->newUserIdList) {
            if (\is_array($this->newUserIdList)) {
                $res['newUserIdList'] = [];
                $n1 = 0;
                foreach ($this->newUserIdList as $item1) {
                    $res['newUserIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['newUserIdList'])) {
            if (!empty($map['newUserIdList'])) {
                $model->newUserIdList = [];
                $n1 = 0;
                foreach ($map['newUserIdList'] as $item1) {
                    $model->newUserIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}

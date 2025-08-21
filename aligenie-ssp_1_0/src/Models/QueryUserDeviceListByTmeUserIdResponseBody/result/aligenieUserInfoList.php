<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryUserDeviceListByTmeUserIdResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryUserDeviceListByTmeUserIdResponseBody\result\aligenieUserInfoList\authorizedDeviceList;

class aligenieUserInfoList extends Model
{
    /**
     * @var authorizedDeviceList[]
     */
    public $authorizedDeviceList;

    /**
     * @var string
     */
    public $openUserId;

    /**
     * @var string
     */
    public $userNickname;
    protected $_name = [
        'authorizedDeviceList' => 'AuthorizedDeviceList',
        'openUserId' => 'OpenUserId',
        'userNickname' => 'UserNickname',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedDeviceList)) {
            Model::validateArray($this->authorizedDeviceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedDeviceList) {
            if (\is_array($this->authorizedDeviceList)) {
                $res['AuthorizedDeviceList'] = [];
                $n1 = 0;
                foreach ($this->authorizedDeviceList as $item1) {
                    $res['AuthorizedDeviceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->openUserId) {
            $res['OpenUserId'] = $this->openUserId;
        }

        if (null !== $this->userNickname) {
            $res['UserNickname'] = $this->userNickname;
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
        if (isset($map['AuthorizedDeviceList'])) {
            if (!empty($map['AuthorizedDeviceList'])) {
                $model->authorizedDeviceList = [];
                $n1 = 0;
                foreach ($map['AuthorizedDeviceList'] as $item1) {
                    $model->authorizedDeviceList[$n1] = authorizedDeviceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OpenUserId'])) {
            $model->openUserId = $map['OpenUserId'];
        }

        if (isset($map['UserNickname'])) {
            $model->userNickname = $map['UserNickname'];
        }

        return $model;
    }
}

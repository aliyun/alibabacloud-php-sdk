<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryUserDeviceListByTmeUserIdResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryUserDeviceListByTmeUserIdResponseBody\result\aligenieUserInfoList\authorizedDeviceList;
use AlibabaCloud\Tea\Model;

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
        'openUserId'           => 'OpenUserId',
        'userNickname'         => 'UserNickname',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedDeviceList) {
            $res['AuthorizedDeviceList'] = [];
            if (null !== $this->authorizedDeviceList && \is_array($this->authorizedDeviceList)) {
                $n = 0;
                foreach ($this->authorizedDeviceList as $item) {
                    $res['AuthorizedDeviceList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return aligenieUserInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedDeviceList'])) {
            if (!empty($map['AuthorizedDeviceList'])) {
                $model->authorizedDeviceList = [];
                $n                           = 0;
                foreach ($map['AuthorizedDeviceList'] as $item) {
                    $model->authorizedDeviceList[$n++] = null !== $item ? authorizedDeviceList::fromMap($item) : $item;
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

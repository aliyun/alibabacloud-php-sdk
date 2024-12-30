<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAlertEventResponseBody\alertEventInfo;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAlertEventResponseBody\alertEventInfo\alertReceiverList\userList;
use AlibabaCloud\Tea\Model;

class alertReceiverList extends Model
{
    /**
     * @var string[]
     */
    public $alertChannelTypeList;

    /**
     * @var string[]
     */
    public $customAlertChannelIdList;

    /**
     * @example test
     *
     * @var string
     */
    public $onCallTableName;

    /**
     * @example OWNER
     *
     * @var string
     */
    public $type;

    /**
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'alertChannelTypeList'     => 'AlertChannelTypeList',
        'customAlertChannelIdList' => 'CustomAlertChannelIdList',
        'onCallTableName'          => 'OnCallTableName',
        'type'                     => 'Type',
        'userList'                 => 'UserList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertChannelTypeList) {
            $res['AlertChannelTypeList'] = $this->alertChannelTypeList;
        }
        if (null !== $this->customAlertChannelIdList) {
            $res['CustomAlertChannelIdList'] = $this->customAlertChannelIdList;
        }
        if (null !== $this->onCallTableName) {
            $res['OnCallTableName'] = $this->onCallTableName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userList) {
            $res['UserList'] = [];
            if (null !== $this->userList && \is_array($this->userList)) {
                $n = 0;
                foreach ($this->userList as $item) {
                    $res['UserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertReceiverList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertChannelTypeList'])) {
            if (!empty($map['AlertChannelTypeList'])) {
                $model->alertChannelTypeList = $map['AlertChannelTypeList'];
            }
        }
        if (isset($map['CustomAlertChannelIdList'])) {
            if (!empty($map['CustomAlertChannelIdList'])) {
                $model->customAlertChannelIdList = $map['CustomAlertChannelIdList'];
            }
        }
        if (isset($map['OnCallTableName'])) {
            $model->onCallTableName = $map['OnCallTableName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n               = 0;
                foreach ($map['UserList'] as $item) {
                    $model->userList[$n++] = null !== $item ? userList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

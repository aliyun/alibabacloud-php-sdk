<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data\alertReceiverList\userList;

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
     * @var string
     */
    public $onCallTableName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'alertChannelTypeList' => 'AlertChannelTypeList',
        'customAlertChannelIdList' => 'CustomAlertChannelIdList',
        'onCallTableName' => 'OnCallTableName',
        'type' => 'Type',
        'userList' => 'UserList',
    ];

    public function validate()
    {
        if (\is_array($this->alertChannelTypeList)) {
            Model::validateArray($this->alertChannelTypeList);
        }
        if (\is_array($this->customAlertChannelIdList)) {
            Model::validateArray($this->customAlertChannelIdList);
        }
        if (\is_array($this->userList)) {
            Model::validateArray($this->userList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertChannelTypeList) {
            if (\is_array($this->alertChannelTypeList)) {
                $res['AlertChannelTypeList'] = [];
                $n1 = 0;
                foreach ($this->alertChannelTypeList as $item1) {
                    $res['AlertChannelTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customAlertChannelIdList) {
            if (\is_array($this->customAlertChannelIdList)) {
                $res['CustomAlertChannelIdList'] = [];
                $n1 = 0;
                foreach ($this->customAlertChannelIdList as $item1) {
                    $res['CustomAlertChannelIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->onCallTableName) {
            $res['OnCallTableName'] = $this->onCallTableName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['UserList'] = [];
                $n1 = 0;
                foreach ($this->userList as $item1) {
                    $res['UserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlertChannelTypeList'])) {
            if (!empty($map['AlertChannelTypeList'])) {
                $model->alertChannelTypeList = [];
                $n1 = 0;
                foreach ($map['AlertChannelTypeList'] as $item1) {
                    $model->alertChannelTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomAlertChannelIdList'])) {
            if (!empty($map['CustomAlertChannelIdList'])) {
                $model->customAlertChannelIdList = [];
                $n1 = 0;
                foreach ($map['CustomAlertChannelIdList'] as $item1) {
                    $model->customAlertChannelIdList[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['UserList'] as $item1) {
                    $model->userList[$n1] = userList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

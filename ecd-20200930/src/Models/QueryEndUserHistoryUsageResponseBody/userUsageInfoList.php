<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\QueryEndUserHistoryUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\QueryEndUserHistoryUsageResponseBody\userUsageInfoList\desktopUsageList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\QueryEndUserHistoryUsageResponseBody\userUsageInfoList\userGroupList;

class userUsageInfoList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var desktopUsageList[]
     */
    public $desktopUsageList;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $endUserName;

    /**
     * @var string[]
     */
    public $orgPathList;

    /**
     * @var userGroupList[]
     */
    public $userGroupList;
    protected $_name = [
        'description' => 'Description',
        'desktopUsageList' => 'DesktopUsageList',
        'displayName' => 'DisplayName',
        'duration' => 'Duration',
        'endUserId' => 'EndUserId',
        'endUserName' => 'EndUserName',
        'orgPathList' => 'OrgPathList',
        'userGroupList' => 'UserGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->desktopUsageList)) {
            Model::validateArray($this->desktopUsageList);
        }
        if (\is_array($this->orgPathList)) {
            Model::validateArray($this->orgPathList);
        }
        if (\is_array($this->userGroupList)) {
            Model::validateArray($this->userGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->desktopUsageList) {
            if (\is_array($this->desktopUsageList)) {
                $res['DesktopUsageList'] = [];
                $n1 = 0;
                foreach ($this->desktopUsageList as $item1) {
                    $res['DesktopUsageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->endUserName) {
            $res['EndUserName'] = $this->endUserName;
        }

        if (null !== $this->orgPathList) {
            if (\is_array($this->orgPathList)) {
                $res['OrgPathList'] = [];
                $n1 = 0;
                foreach ($this->orgPathList as $item1) {
                    $res['OrgPathList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userGroupList) {
            if (\is_array($this->userGroupList)) {
                $res['UserGroupList'] = [];
                $n1 = 0;
                foreach ($this->userGroupList as $item1) {
                    $res['UserGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DesktopUsageList'])) {
            if (!empty($map['DesktopUsageList'])) {
                $model->desktopUsageList = [];
                $n1 = 0;
                foreach ($map['DesktopUsageList'] as $item1) {
                    $model->desktopUsageList[$n1] = desktopUsageList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['EndUserName'])) {
            $model->endUserName = $map['EndUserName'];
        }

        if (isset($map['OrgPathList'])) {
            if (!empty($map['OrgPathList'])) {
                $model->orgPathList = [];
                $n1 = 0;
                foreach ($map['OrgPathList'] as $item1) {
                    $model->orgPathList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserGroupList'])) {
            if (!empty($map['UserGroupList'])) {
                $model->userGroupList = [];
                $n1 = 0;
                foreach ($map['UserGroupList'] as $item1) {
                    $model->userGroupList[$n1] = userGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

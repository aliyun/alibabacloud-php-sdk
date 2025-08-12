<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class ModifyLiveMessageGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $adminList;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupInfo;

    /**
     * @var bool
     */
    public $modifyAdmin;

    /**
     * @var bool
     */
    public $modifyInfo;
    protected $_name = [
        'adminList' => 'AdminList',
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
        'groupInfo' => 'GroupInfo',
        'modifyAdmin' => 'ModifyAdmin',
        'modifyInfo' => 'ModifyInfo',
    ];

    public function validate()
    {
        if (\is_array($this->adminList)) {
            Model::validateArray($this->adminList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminList) {
            if (\is_array($this->adminList)) {
                $res['AdminList'] = [];
                $n1 = 0;
                foreach ($this->adminList as $item1) {
                    $res['AdminList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupInfo) {
            $res['GroupInfo'] = $this->groupInfo;
        }

        if (null !== $this->modifyAdmin) {
            $res['ModifyAdmin'] = $this->modifyAdmin;
        }

        if (null !== $this->modifyInfo) {
            $res['ModifyInfo'] = $this->modifyInfo;
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
        if (isset($map['AdminList'])) {
            if (!empty($map['AdminList'])) {
                $model->adminList = [];
                $n1 = 0;
                foreach ($map['AdminList'] as $item1) {
                    $model->adminList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupInfo'])) {
            $model->groupInfo = $map['GroupInfo'];
        }

        if (isset($map['ModifyAdmin'])) {
            $model->modifyAdmin = $map['ModifyAdmin'];
        }

        if (isset($map['ModifyInfo'])) {
            $model->modifyInfo = $map['ModifyInfo'];
        }

        return $model;
    }
}

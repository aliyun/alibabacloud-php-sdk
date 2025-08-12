<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class BanLiveMessageGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string[]
     */
    public $exceptUsers;

    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'exceptUsers' => 'ExceptUsers',
        'groupId' => 'GroupId',
    ];

    public function validate()
    {
        if (\is_array($this->exceptUsers)) {
            Model::validateArray($this->exceptUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->exceptUsers) {
            if (\is_array($this->exceptUsers)) {
                $res['ExceptUsers'] = [];
                $n1 = 0;
                foreach ($this->exceptUsers as $item1) {
                    $res['ExceptUsers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['ExceptUsers'])) {
            if (!empty($map['ExceptUsers'])) {
                $model->exceptUsers = [];
                $n1 = 0;
                foreach ($map['ExceptUsers'] as $item1) {
                    $model->exceptUsers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}

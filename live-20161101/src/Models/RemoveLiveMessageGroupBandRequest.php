<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class RemoveLiveMessageGroupBandRequest extends Model
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
     * @var string
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $unbannedUsers;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
        'unbannedUsers' => 'UnbannedUsers',
    ];

    public function validate()
    {
        if (\is_array($this->unbannedUsers)) {
            Model::validateArray($this->unbannedUsers);
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

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->unbannedUsers) {
            if (\is_array($this->unbannedUsers)) {
                $res['UnbannedUsers'] = [];
                $n1 = 0;
                foreach ($this->unbannedUsers as $item1) {
                    $res['UnbannedUsers'][$n1] = $item1;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['UnbannedUsers'])) {
            if (!empty($map['UnbannedUsers'])) {
                $model->unbannedUsers = [];
                $n1 = 0;
                foreach ($map['UnbannedUsers'] as $item1) {
                    $model->unbannedUsers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

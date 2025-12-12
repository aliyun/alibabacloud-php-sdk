<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormV2WhiteIpListRequest;

use AlibabaCloud\Dara\Model;

class whiteIpGroupList extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $whiteIpList;
    protected $_name = [
        'groupName' => 'GroupName',
        'whiteIpList' => 'WhiteIpList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->whiteIpList) {
            $res['WhiteIpList'] = $this->whiteIpList;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['WhiteIpList'])) {
            $model->whiteIpList = $map['WhiteIpList'];
        }

        return $model;
    }
}

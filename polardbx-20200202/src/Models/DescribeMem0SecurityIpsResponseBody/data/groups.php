<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeMem0SecurityIpsResponseBody\data;

use AlibabaCloud\Dara\Model;

class groups extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupTag;

    /**
     * @var string
     */
    public $ipLists;
    protected $_name = [
        'groupName' => 'GroupName',
        'groupTag' => 'GroupTag',
        'ipLists' => 'IpLists',
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

        if (null !== $this->groupTag) {
            $res['GroupTag'] = $this->groupTag;
        }

        if (null !== $this->ipLists) {
            $res['IpLists'] = $this->ipLists;
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

        if (isset($map['GroupTag'])) {
            $model->groupTag = $map['GroupTag'];
        }

        if (isset($map['IpLists'])) {
            $model->ipLists = $map['IpLists'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceForTerraformResponseBody;

use AlibabaCloud\Dara\Model;

class whiteIpList extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $ipList;
    protected $_name = [
        'groupName' => 'GroupName',
        'ipList' => 'IpList',
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

        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
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

        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }

        return $model;
    }
}

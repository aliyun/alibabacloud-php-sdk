<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceSecurityGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class sgList extends Model
{
    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $ipList;

    /**
     * @var bool
     */
    public $isAvailable;

    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'gmtModified' => 'GmtModified',
        'ipList' => 'IpList',
        'isAvailable' => 'IsAvailable',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }

        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }

        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class domainGroups extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $domainCount;
    protected $_name = [
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'domainCount' => 'DomainCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }

        return $model;
    }
}

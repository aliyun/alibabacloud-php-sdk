<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsResponseBody\domainGroups;

use AlibabaCloud\Tea\Model;

class domainGroup extends Model
{
    /**
     * @description The number of domain name groups.
     *
     * @example 2
     *
     * @var int
     */
    public $domainCount;

    /**
     * @description The ID of the domain name group. Valid values:
     *
     *   defaultGroup: the default group
     *   If an empty string is returned, it indicates the group that contains all domain names.
     *
     * @example 2223
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the domain name group.
     *
     * @example MyGroup
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'domainCount' => 'DomainCount',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}

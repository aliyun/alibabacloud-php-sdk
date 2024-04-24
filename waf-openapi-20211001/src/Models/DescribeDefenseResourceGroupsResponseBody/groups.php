<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description The description of the protected object group.
     *
     * @example This is test description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the protected object group was created. Unit: milliseconds.
     *
     * @example 1624343180000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The most recent time when the protected object group was modified. Unit: milliseconds.
     *
     * @example 1701656305000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The name of the protected object group.
     *
     * @example apptest
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The names of the protected objects that are added to the protected object group. Separate multiple protected objects with commas (,).
     *
     * @example example02.aliyun-waf,example01.aliyun-waf
     *
     * @var string
     */
    public $resourceList;
    protected $_name = [
        'description'  => 'Description',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'groupName'    => 'GroupName',
        'resourceList' => 'ResourceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = $this->resourceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ResourceList'])) {
            $model->resourceList = $map['ResourceList'];
        }

        return $model;
    }
}

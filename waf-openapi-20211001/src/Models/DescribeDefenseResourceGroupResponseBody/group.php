<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description The description of the protected object group.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the protected object group was created.
     *
     * @example 23242312312
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The most recent time when the protected object group was modified.
     *
     * @example 23242312312
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The name of the protected object group.
     *
     * @example group1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The protected objects in the protected object group. The protected objects are separated with commas (,).
     *
     * @example test1.aliyundoc.com,test2.aliyundoc.com
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
     * @return group
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

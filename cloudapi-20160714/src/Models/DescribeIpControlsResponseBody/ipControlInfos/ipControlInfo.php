<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponseBody\ipControlInfos;

use AlibabaCloud\Tea\Model;

class ipControlInfo extends Model
{
    /**
     * @description The time when the ACL was created. The time is displayed in UTC.
     *
     * @example 2018-01-17T05:48:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the ACL.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the ACL.
     *
     * @example 7ea91319a34d48a09b5c9c871d9768b1
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @description The name of the ACL.
     *
     * @example testControl11
     *
     * @var string
     */
    public $ipControlName;

    /**
     * @description The type of the ACL.
     *
     * @example ALLOW
     *
     * @var string
     */
    public $ipControlType;

    /**
     * @description The time when the ACL was modified. The time is displayed in UTC.
     *
     * @example 2018-01-17T06:00:38Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the region in which the ACL is deployed.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'ipControlId'   => 'IpControlId',
        'ipControlName' => 'IpControlName',
        'ipControlType' => 'IpControlType',
        'modifiedTime'  => 'ModifiedTime',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }
        if (null !== $this->ipControlType) {
            $res['IpControlType'] = $this->ipControlType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['IpControlName'])) {
            $model->ipControlName = $map['IpControlName'];
        }
        if (isset($map['IpControlType'])) {
            $model->ipControlType = $map['IpControlType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

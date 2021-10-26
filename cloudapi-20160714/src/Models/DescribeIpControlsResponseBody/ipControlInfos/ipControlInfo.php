<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponseBody\ipControlInfos;

use AlibabaCloud\Tea\Model;

class ipControlInfo extends Model
{
    /**
     * @var string
     */
    public $ipControlId;

    /**
     * @var string
     */
    public $ipControlType;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $ipControlName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ipControlId'   => 'IpControlId',
        'ipControlType' => 'IpControlType',
        'modifiedTime'  => 'ModifiedTime',
        'ipControlName' => 'IpControlName',
        'description'   => 'Description',
        'createTime'    => 'CreateTime',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->ipControlType) {
            $res['IpControlType'] = $this->ipControlType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['IpControlType'])) {
            $model->ipControlType = $map['IpControlType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['IpControlName'])) {
            $model->ipControlName = $map['IpControlName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

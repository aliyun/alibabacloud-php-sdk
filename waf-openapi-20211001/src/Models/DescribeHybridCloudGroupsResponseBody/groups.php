<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description The back-to-origin mark of the protected cluster. The value is in the {ISP name}-{Continent name}-{City name}-{Back-to-origin identifier} format. The back-to-origin identifier is optional.
     *
     * >  For more information about ISP names, continent names, city names, and back-to-origin identifiers, see the following sections.
     * @example aliyun-asiapacific-beijing-12345678
     *
     * @var string
     */
    public $backSourceMark;

    /**
     * @description The continent code of the protected cluster.
     *
     * >  For more information about continent codes, see Continent codes in this topic.
     * @example 410
     *
     * @var int
     */
    public $continentsValue;

    /**
     * @description The ID of the node group.
     *
     * @example 123
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the node group.
     *
     * @example StorageGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the node group. Valid values:
     *
     *   **protect**
     *   **control**
     *   **storage**
     *   **controlStorage**
     *
     * @example protect
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The IP address of the server used for load balancing.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $loadBalanceIp;

    /**
     * @description The ID of the protection node.
     *
     * @example 1312
     *
     * @var int
     */
    public $locationId;

    /**
     * @description The ISP code of the protected cluster.
     *
     * >  For more information about ISP codes, see ISP codes in this topic.
     * @example 0
     *
     * @var int
     */
    public $operatorValue;

    /**
     * @description The port that is used by the hybrid cloud cluster. The value of this parameter is a string. If multiple ports are returned, the value is in the **port1,port2,port3** format.
     *
     * @example 80,9200,20018
     *
     * @var string
     */
    public $ports;

    /**
     * @description The city code of the protected cluster.
     *
     * >  For more information about city codes, see City codes in this topic.
     * @example 0
     *
     * @var int
     */
    public $regionCodeValue;

    /**
     * @description The description of the node group.
     *
     * @example test
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'backSourceMark'  => 'BackSourceMark',
        'continentsValue' => 'ContinentsValue',
        'groupId'         => 'GroupId',
        'groupName'       => 'GroupName',
        'groupType'       => 'GroupType',
        'loadBalanceIp'   => 'LoadBalanceIp',
        'locationId'      => 'LocationId',
        'operatorValue'   => 'OperatorValue',
        'ports'           => 'Ports',
        'regionCodeValue' => 'RegionCodeValue',
        'remark'          => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backSourceMark) {
            $res['BackSourceMark'] = $this->backSourceMark;
        }
        if (null !== $this->continentsValue) {
            $res['ContinentsValue'] = $this->continentsValue;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->loadBalanceIp) {
            $res['LoadBalanceIp'] = $this->loadBalanceIp;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->operatorValue) {
            $res['OperatorValue'] = $this->operatorValue;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->regionCodeValue) {
            $res['RegionCodeValue'] = $this->regionCodeValue;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['BackSourceMark'])) {
            $model->backSourceMark = $map['BackSourceMark'];
        }
        if (isset($map['ContinentsValue'])) {
            $model->continentsValue = $map['ContinentsValue'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['LoadBalanceIp'])) {
            $model->loadBalanceIp = $map['LoadBalanceIp'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['OperatorValue'])) {
            $model->operatorValue = $map['OperatorValue'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }
        if (isset($map['RegionCodeValue'])) {
            $model->regionCodeValue = $map['RegionCodeValue'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}

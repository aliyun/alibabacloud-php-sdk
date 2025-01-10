<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListLniPrivateIpAddressRequest extends Model
{
    /**
     * @description The description of the variable.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Whether pagination is required
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description network interface controller IP address
     *
     * @example 10.0.98.10
     *
     * @var string
     */
    public $ip;

    /**
     * @description IP unique identifier
     *
     * @example sip-tynhdh2s
     *
     * @var string
     */
    public $ipName;

    /**
     * @description Lingjun network interface controller ID
     *
     * @example lni-2ze4uww7n6hsfzrwq77y
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Obtain the index number of the current mouse click for an animation
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'description'        => 'Description',
        'enablePage'         => 'EnablePage',
        'ip'                 => 'Ip',
        'ipName'             => 'IpName',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'regionId'           => 'RegionId',
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
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLniPrivateIpAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpName'])) {
            $model->ipName = $map['IpName'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

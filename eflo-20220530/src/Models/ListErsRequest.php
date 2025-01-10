<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListErsRequest extends Model
{
    /**
     * @description Specifies whether to enable paged query. Valid values:
     *
     *   true: enables paged query.
     *   false: Paged query is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description The ID of the Lingjun HUB instance.
     *
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description Lingjun HUB name.
     *
     * @example er-heyuan-main
     *
     * @var string
     */
    public $erName;

    /**
     * @description The ID of the network instance.
     *
     * @example vcc-cn-209300qha01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the attached network instance. Valid values:
     *
     *   **VPD**
     *   **VCC**
     *
     * @example VCC
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The primary zone.
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $masterZoneId;

    /**
     * @description The page number to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 10
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

    /**
     * @description Resource group instance ID
     *
     * @example rg-acfmwfm33rlt6zi
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'enablePage'      => 'EnablePage',
        'erId'            => 'ErId',
        'erName'          => 'ErName',
        'instanceId'      => 'InstanceId',
        'instanceType'    => 'InstanceType',
        'masterZoneId'    => 'MasterZoneId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->erName) {
            $res['ErName'] = $this->erName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListErsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ErName'])) {
            $model->erName = $map['ErName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

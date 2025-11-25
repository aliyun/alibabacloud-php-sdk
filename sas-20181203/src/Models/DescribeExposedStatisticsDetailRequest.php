<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeExposedStatisticsDetailRequest extends Model
{
    /**
     * @var string
     */
    public $criteria;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $exposureIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @var string
     */
    public $statisticsType;

    /**
     * @var string
     */
    public $statisticsTypeGatewayType;

    /**
     * @var string
     */
    public $statisticsTypeInstanceValue;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'criteria' => 'Criteria',
        'currentPage' => 'CurrentPage',
        'exposureIp' => 'ExposureIp',
        'instanceId' => 'InstanceId',
        'pageSize' => 'PageSize',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'statisticsType' => 'StatisticsType',
        'statisticsTypeGatewayType' => 'StatisticsTypeGatewayType',
        'statisticsTypeInstanceValue' => 'StatisticsTypeInstanceValue',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->exposureIp) {
            $res['ExposureIp'] = $this->exposureIp;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->statisticsType) {
            $res['StatisticsType'] = $this->statisticsType;
        }

        if (null !== $this->statisticsTypeGatewayType) {
            $res['StatisticsTypeGatewayType'] = $this->statisticsTypeGatewayType;
        }

        if (null !== $this->statisticsTypeInstanceValue) {
            $res['StatisticsTypeInstanceValue'] = $this->statisticsTypeInstanceValue;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['ExposureIp'])) {
            $model->exposureIp = $map['ExposureIp'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['StatisticsType'])) {
            $model->statisticsType = $map['StatisticsType'];
        }

        if (isset($map['StatisticsTypeGatewayType'])) {
            $model->statisticsTypeGatewayType = $map['StatisticsTypeGatewayType'];
        }

        if (isset($map['StatisticsTypeInstanceValue'])) {
            $model->statisticsTypeInstanceValue = $map['StatisticsTypeInstanceValue'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

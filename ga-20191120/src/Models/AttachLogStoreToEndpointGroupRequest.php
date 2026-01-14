<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class AttachLogStoreToEndpointGroupRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string[]
     */
    public $accessLogRecordCustomizedHeaderList;

    /**
     * @var bool
     */
    public $accessLogRecordCustomizedHeadersEnabled;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $endpointGroupIds;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $slsLogStoreName;

    /**
     * @var string
     */
    public $slsProjectName;

    /**
     * @var string
     */
    public $slsRegionId;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'accessLogRecordCustomizedHeaderList' => 'AccessLogRecordCustomizedHeaderList',
        'accessLogRecordCustomizedHeadersEnabled' => 'AccessLogRecordCustomizedHeadersEnabled',
        'clientToken' => 'ClientToken',
        'endpointGroupIds' => 'EndpointGroupIds',
        'listenerId' => 'ListenerId',
        'regionId' => 'RegionId',
        'slsLogStoreName' => 'SlsLogStoreName',
        'slsProjectName' => 'SlsProjectName',
        'slsRegionId' => 'SlsRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->accessLogRecordCustomizedHeaderList)) {
            Model::validateArray($this->accessLogRecordCustomizedHeaderList);
        }
        if (\is_array($this->endpointGroupIds)) {
            Model::validateArray($this->endpointGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->accessLogRecordCustomizedHeaderList) {
            if (\is_array($this->accessLogRecordCustomizedHeaderList)) {
                $res['AccessLogRecordCustomizedHeaderList'] = [];
                $n1 = 0;
                foreach ($this->accessLogRecordCustomizedHeaderList as $item1) {
                    $res['AccessLogRecordCustomizedHeaderList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->accessLogRecordCustomizedHeadersEnabled) {
            $res['AccessLogRecordCustomizedHeadersEnabled'] = $this->accessLogRecordCustomizedHeadersEnabled;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->endpointGroupIds) {
            if (\is_array($this->endpointGroupIds)) {
                $res['EndpointGroupIds'] = [];
                $n1 = 0;
                foreach ($this->endpointGroupIds as $item1) {
                    $res['EndpointGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->slsLogStoreName) {
            $res['SlsLogStoreName'] = $this->slsLogStoreName;
        }

        if (null !== $this->slsProjectName) {
            $res['SlsProjectName'] = $this->slsProjectName;
        }

        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['AccessLogRecordCustomizedHeaderList'])) {
            if (!empty($map['AccessLogRecordCustomizedHeaderList'])) {
                $model->accessLogRecordCustomizedHeaderList = [];
                $n1 = 0;
                foreach ($map['AccessLogRecordCustomizedHeaderList'] as $item1) {
                    $model->accessLogRecordCustomizedHeaderList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AccessLogRecordCustomizedHeadersEnabled'])) {
            $model->accessLogRecordCustomizedHeadersEnabled = $map['AccessLogRecordCustomizedHeadersEnabled'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EndpointGroupIds'])) {
            if (!empty($map['EndpointGroupIds'])) {
                $model->endpointGroupIds = [];
                $n1 = 0;
                foreach ($map['EndpointGroupIds'] as $item1) {
                    $model->endpointGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SlsLogStoreName'])) {
            $model->slsLogStoreName = $map['SlsLogStoreName'];
        }

        if (isset($map['SlsProjectName'])) {
            $model->slsProjectName = $map['SlsProjectName'];
        }

        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }

        return $model;
    }
}

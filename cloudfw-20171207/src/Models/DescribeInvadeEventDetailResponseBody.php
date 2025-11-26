<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventDetailResponseBody\operationList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventDetailResponseBody\unhandleOperationList;

class DescribeInvadeEventDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @var string
     */
    public $assetsInstanceName;

    /**
     * @var string
     */
    public $eventDesc;

    /**
     * @var string
     */
    public $eventDetail;

    /**
     * @var string
     */
    public $eventKey;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventUuid;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var bool
     */
    public $isIgnore;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var operationList[]
     */
    public $operationList;

    /**
     * @var string
     */
    public $privateIP;

    /**
     * @var int
     */
    public $processStatus;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $reference;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var unhandleOperationList[]
     */
    public $unhandleOperationList;
    protected $_name = [
        'assetsInstanceId' => 'AssetsInstanceId',
        'assetsInstanceName' => 'AssetsInstanceName',
        'eventDesc' => 'EventDesc',
        'eventDetail' => 'EventDetail',
        'eventKey' => 'EventKey',
        'eventName' => 'EventName',
        'eventUuid' => 'EventUuid',
        'firstTime' => 'FirstTime',
        'isIgnore' => 'IsIgnore',
        'lastTime' => 'LastTime',
        'operationList' => 'OperationList',
        'privateIP' => 'PrivateIP',
        'processStatus' => 'ProcessStatus',
        'publicIP' => 'PublicIP',
        'reference' => 'Reference',
        'regionNo' => 'RegionNo',
        'requestId' => 'RequestId',
        'riskLevel' => 'RiskLevel',
        'unhandleOperationList' => 'UnhandleOperationList',
    ];

    public function validate()
    {
        if (\is_array($this->operationList)) {
            Model::validateArray($this->operationList);
        }
        if (\is_array($this->unhandleOperationList)) {
            Model::validateArray($this->unhandleOperationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetsInstanceId) {
            $res['AssetsInstanceId'] = $this->assetsInstanceId;
        }

        if (null !== $this->assetsInstanceName) {
            $res['AssetsInstanceName'] = $this->assetsInstanceName;
        }

        if (null !== $this->eventDesc) {
            $res['EventDesc'] = $this->eventDesc;
        }

        if (null !== $this->eventDetail) {
            $res['EventDetail'] = $this->eventDetail;
        }

        if (null !== $this->eventKey) {
            $res['EventKey'] = $this->eventKey;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventUuid) {
            $res['EventUuid'] = $this->eventUuid;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->isIgnore) {
            $res['IsIgnore'] = $this->isIgnore;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->operationList) {
            if (\is_array($this->operationList)) {
                $res['OperationList'] = [];
                $n1 = 0;
                foreach ($this->operationList as $item1) {
                    $res['OperationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }

        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }

        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }

        if (null !== $this->reference) {
            $res['Reference'] = $this->reference;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->unhandleOperationList) {
            if (\is_array($this->unhandleOperationList)) {
                $res['UnhandleOperationList'] = [];
                $n1 = 0;
                foreach ($this->unhandleOperationList as $item1) {
                    $res['UnhandleOperationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AssetsInstanceId'])) {
            $model->assetsInstanceId = $map['AssetsInstanceId'];
        }

        if (isset($map['AssetsInstanceName'])) {
            $model->assetsInstanceName = $map['AssetsInstanceName'];
        }

        if (isset($map['EventDesc'])) {
            $model->eventDesc = $map['EventDesc'];
        }

        if (isset($map['EventDetail'])) {
            $model->eventDetail = $map['EventDetail'];
        }

        if (isset($map['EventKey'])) {
            $model->eventKey = $map['EventKey'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventUuid'])) {
            $model->eventUuid = $map['EventUuid'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['IsIgnore'])) {
            $model->isIgnore = $map['IsIgnore'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['OperationList'])) {
            if (!empty($map['OperationList'])) {
                $model->operationList = [];
                $n1 = 0;
                foreach ($map['OperationList'] as $item1) {
                    $model->operationList[$n1] = operationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }

        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }

        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }

        if (isset($map['Reference'])) {
            $model->reference = $map['Reference'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['UnhandleOperationList'])) {
            if (!empty($map['UnhandleOperationList'])) {
                $model->unhandleOperationList = [];
                $n1 = 0;
                foreach ($map['UnhandleOperationList'] as $item1) {
                    $model->unhandleOperationList[$n1] = unhandleOperationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

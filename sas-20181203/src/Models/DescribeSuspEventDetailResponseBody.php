<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventDetailResponseBody\details;
use AlibabaCloud\Tea\Model;

class DescribeSuspEventDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $eventDesc;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $eventTypeDesc;

    /**
     * @var string
     */
    public $operateErrorCode;

    /**
     * @var string
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $saleVersion;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $operateMsg;

    /**
     * @var bool
     */
    public $canBeDealOnLine;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastTime;

    /**
     * @var string
     */
    public $sasId;
    protected $_name = [
        'eventDesc'        => 'EventDesc',
        'requestId'        => 'RequestId',
        'eventTypeDesc'    => 'EventTypeDesc',
        'operateErrorCode' => 'OperateErrorCode',
        'eventStatus'      => 'EventStatus',
        'eventName'        => 'EventName',
        'saleVersion'      => 'SaleVersion',
        'intranetIp'       => 'IntranetIp',
        'dataSource'       => 'DataSource',
        'instanceName'     => 'InstanceName',
        'operateMsg'       => 'OperateMsg',
        'canBeDealOnLine'  => 'CanBeDealOnLine',
        'uuid'             => 'Uuid',
        'details'          => 'Details',
        'internetIp'       => 'InternetIp',
        'level'            => 'Level',
        'id'               => 'Id',
        'lastTime'         => 'LastTime',
        'sasId'            => 'SasId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDesc) {
            $res['EventDesc'] = $this->eventDesc;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eventTypeDesc) {
            $res['EventTypeDesc'] = $this->eventTypeDesc;
        }
        if (null !== $this->operateErrorCode) {
            $res['OperateErrorCode'] = $this->operateErrorCode;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->operateMsg) {
            $res['OperateMsg'] = $this->operateMsg;
        }
        if (null !== $this->canBeDealOnLine) {
            $res['CanBeDealOnLine'] = $this->canBeDealOnLine;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->sasId) {
            $res['SasId'] = $this->sasId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventDesc'])) {
            $model->eventDesc = $map['EventDesc'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EventTypeDesc'])) {
            $model->eventTypeDesc = $map['EventTypeDesc'];
        }
        if (isset($map['OperateErrorCode'])) {
            $model->operateErrorCode = $map['OperateErrorCode'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['OperateMsg'])) {
            $model->operateMsg = $map['OperateMsg'];
        }
        if (isset($map['CanBeDealOnLine'])) {
            $model->canBeDealOnLine = $map['CanBeDealOnLine'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['SasId'])) {
            $model->sasId = $map['SasId'];
        }

        return $model;
    }
}

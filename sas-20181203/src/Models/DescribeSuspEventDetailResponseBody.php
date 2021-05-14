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
    public $dataSource;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $lastTime;

    /**
     * @var string
     */
    public $operateMsg;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var bool
     */
    public $canBeDealOnLine;

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
    public $eventDesc;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $saleVersion;

    /**
     * @var string
     */
    public $operateErrorCode;

    /**
     * @var string
     */
    public $sasId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $id;

    /**
     * @var details[]
     */
    public $details;
    protected $_name = [
        'dataSource'       => 'DataSource',
        'eventName'        => 'EventName',
        'internetIp'       => 'InternetIp',
        'intranetIp'       => 'IntranetIp',
        'lastTime'         => 'LastTime',
        'operateMsg'       => 'OperateMsg',
        'uuid'             => 'Uuid',
        'canBeDealOnLine'  => 'CanBeDealOnLine',
        'requestId'        => 'RequestId',
        'eventTypeDesc'    => 'EventTypeDesc',
        'eventDesc'        => 'EventDesc',
        'instanceName'     => 'InstanceName',
        'eventStatus'      => 'EventStatus',
        'saleVersion'      => 'SaleVersion',
        'operateErrorCode' => 'OperateErrorCode',
        'sasId'            => 'SasId',
        'level'            => 'Level',
        'id'               => 'Id',
        'details'          => 'Details',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->operateMsg) {
            $res['OperateMsg'] = $this->operateMsg;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->canBeDealOnLine) {
            $res['CanBeDealOnLine'] = $this->canBeDealOnLine;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eventTypeDesc) {
            $res['EventTypeDesc'] = $this->eventTypeDesc;
        }
        if (null !== $this->eventDesc) {
            $res['EventDesc'] = $this->eventDesc;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }
        if (null !== $this->operateErrorCode) {
            $res['OperateErrorCode'] = $this->operateErrorCode;
        }
        if (null !== $this->sasId) {
            $res['SasId'] = $this->sasId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['OperateMsg'])) {
            $model->operateMsg = $map['OperateMsg'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['CanBeDealOnLine'])) {
            $model->canBeDealOnLine = $map['CanBeDealOnLine'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EventTypeDesc'])) {
            $model->eventTypeDesc = $map['EventTypeDesc'];
        }
        if (isset($map['EventDesc'])) {
            $model->eventDesc = $map['EventDesc'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }
        if (isset($map['OperateErrorCode'])) {
            $model->operateErrorCode = $map['OperateErrorCode'];
        }
        if (isset($map['SasId'])) {
            $model->sasId = $map['SasId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}

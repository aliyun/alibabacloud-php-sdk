<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventDetailResponseBody\details;
use AlibabaCloud\Tea\Model;

class DescribeSuspEventDetailResponseBody extends Model
{
    /**
     * @description Indicates whether the online processing of exceptions is supported, such as blocking an exception, adding an exception to the whitelist, and ignoring an exception. Valid values:
     *
     *   **true**: The online processing of exceptions is supported.
     *   **false**: The online processing of exceptions is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $canBeDealOnLine;

    /**
     * @description The data source of the exception.
     *
     * @example aegis_suspicious_****
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description An array that consists of the details of the exception.
     *
     * @var details[]
     */
    public $details;

    /**
     * @description The description of the exception.
     *
     * @example The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.
     *
     * @var string
     */
    public $eventDesc;

    /**
     * @description The name of the exception.
     *
     * @example WEBSHELL
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The status of the exception. Valid values:
     *
     *   **1**: pending handling
     *   **2**: ignored
     *   **4**: confirmed
     *   **8**: marked as a false positive
     *   **16**: handling
     *   **32**: handled
     *   **64**: expired
     *
     * @example 1
     *
     * @var string
     */
    public $eventStatus;

    /**
     * @description The type of the exception.
     *
     * @example Malicious Software-Variable Trojan
     *
     * @var string
     */
    public $eventTypeDesc;

    /**
     * @description The ID of the exception.
     *
     * @example 11416624
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the server on which the exception was detected.
     *
     * @example ca_cpm_****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server on which the exception was detected.
     *
     * @example 101.132.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server on which the exception was detected.
     *
     * @example 172.26.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The time when the exception was last detected.
     *
     * @example 2018-10-30 11:43:46
     *
     * @var string
     */
    public $lastTime;

    /**
     * @description The risk level of the exception. Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious
     *
     * @var string
     */
    public $level;

    /**
     * @description The code that indicates the handling result of the exception.
     *
     * @example quara.Succes
     *
     * @var string
     */
    public $operateErrorCode;

    /**
     * @description The message that indicates the handling result of the exception.
     *
     * @example success
     *
     * @var string
     */
    public $operateMsg;

    /**
     * @description The ID of the request.
     *
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF46038
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The edition of Security Center in which the exception can be detected. Valid values:
     *
     *   **0**: Basic edition
     *   **1**: Advanced edition
     *   **2**: Enterprise edition
     *
     * @example 1
     *
     * @var string
     */
    public $saleVersion;

    /**
     * @description The UUID of the server on which the exception was detected.
     *
     * @example bffb12c3-590a-4db2-b538-****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'canBeDealOnLine'  => 'CanBeDealOnLine',
        'dataSource'       => 'DataSource',
        'details'          => 'Details',
        'eventDesc'        => 'EventDesc',
        'eventName'        => 'EventName',
        'eventStatus'      => 'EventStatus',
        'eventTypeDesc'    => 'EventTypeDesc',
        'id'               => 'Id',
        'instanceName'     => 'InstanceName',
        'internetIp'       => 'InternetIp',
        'intranetIp'       => 'IntranetIp',
        'lastTime'         => 'LastTime',
        'level'            => 'Level',
        'operateErrorCode' => 'OperateErrorCode',
        'operateMsg'       => 'OperateMsg',
        'requestId'        => 'RequestId',
        'saleVersion'      => 'SaleVersion',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canBeDealOnLine) {
            $res['CanBeDealOnLine'] = $this->canBeDealOnLine;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
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
        if (null !== $this->eventDesc) {
            $res['EventDesc'] = $this->eventDesc;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->eventTypeDesc) {
            $res['EventTypeDesc'] = $this->eventTypeDesc;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->operateErrorCode) {
            $res['OperateErrorCode'] = $this->operateErrorCode;
        }
        if (null !== $this->operateMsg) {
            $res['OperateMsg'] = $this->operateMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['CanBeDealOnLine'])) {
            $model->canBeDealOnLine = $map['CanBeDealOnLine'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
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
        if (isset($map['EventDesc'])) {
            $model->eventDesc = $map['EventDesc'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['EventTypeDesc'])) {
            $model->eventTypeDesc = $map['EventTypeDesc'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['OperateErrorCode'])) {
            $model->operateErrorCode = $map['OperateErrorCode'];
        }
        if (isset($map['OperateMsg'])) {
            $model->operateMsg = $map['OperateMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

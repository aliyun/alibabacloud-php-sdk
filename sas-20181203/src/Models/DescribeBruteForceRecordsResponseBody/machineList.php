<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class machineList extends Model
{
    /**
     * @var bool
     */
    public $aliNetOnline;

    /**
     * @description The timestamp when the block action on the IP address becomes invalid.
     *
     * @example 1671506882063
     *
     * @var int
     */
    public $blockExpireDate;

    /**
     * @description The blocked IP address.
     *
     * @example 10.12.XX.XX
     *
     * @var string
     */
    public $blockIp;

    /**
     * @var string
     */
    public $blockType;

    /**
     * @description The error code returned when the defense rule fails to block the IP address.
     *
     * @example InstanceSecurityGroupLimitExceeded
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the primary key in the table of records on the blocked IP address.
     *
     * @example 112XX
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the server.
     *
     * @example record-test-***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address.
     *
     * @example 120.79.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The port that is attacked.
     *
     * @example 22/22
     *
     * @var string
     */
    public $port;

    /**
     * @description The name of the defense rule.
     *
     * @example AntiRuleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the defense rule. Valid values:
     *
     *   **userRule**: custom rule
     *   **blinkRule**: system rule
     *
     * @example userRule
     *
     * @var string
     */
    public $source;

    /**
     * @description The status of the defense rule. Valid values:
     *
     *   **0**: invalid
     *   **1**: enabled
     *   **2**: failed
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The UUID of the server on which access from the IP address is blocked.
     *
     * @example 6d5b361f-958d-48a8-a9d2-d6e82c1****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliNetOnline'    => 'AliNetOnline',
        'blockExpireDate' => 'BlockExpireDate',
        'blockIp'         => 'BlockIp',
        'blockType'       => 'BlockType',
        'errorCode'       => 'ErrorCode',
        'id'              => 'Id',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'port'            => 'Port',
        'ruleName'        => 'RuleName',
        'source'          => 'Source',
        'status'          => 'Status',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliNetOnline) {
            $res['AliNetOnline'] = $this->aliNetOnline;
        }
        if (null !== $this->blockExpireDate) {
            $res['BlockExpireDate'] = $this->blockExpireDate;
        }
        if (null !== $this->blockIp) {
            $res['BlockIp'] = $this->blockIp;
        }
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machineList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliNetOnline'])) {
            $model->aliNetOnline = $map['AliNetOnline'];
        }
        if (isset($map['BlockExpireDate'])) {
            $model->blockExpireDate = $map['BlockExpireDate'];
        }
        if (isset($map['BlockIp'])) {
            $model->blockIp = $map['BlockIp'];
        }
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

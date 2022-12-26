<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class machineList extends Model
{
    /**
     * @example 1671506882063
     *
     * @var int
     */
    public $blockExpireDate;

    /**
     * @example 10.12.XX.XX
     *
     * @var string
     */
    public $blockIp;

    /**
     * @example InstanceSecurityGroupLimitExceeded
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 112XX
     *
     * @var int
     */
    public $id;

    /**
     * @example record-test-***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 120.79.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example 22/22
     *
     * @var string
     */
    public $port;

    /**
     * @example AntiRuleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example userRule
     *
     * @var string
     */
    public $source;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @example 6d5b361f-958d-48a8-a9d2-d6e82c1****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'blockExpireDate' => 'BlockExpireDate',
        'blockIp'         => 'BlockIp',
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
        if (null !== $this->blockExpireDate) {
            $res['BlockExpireDate'] = $this->blockExpireDate;
        }
        if (null !== $this->blockIp) {
            $res['BlockIp'] = $this->blockIp;
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
        if (isset($map['BlockExpireDate'])) {
            $model->blockExpireDate = $map['BlockExpireDate'];
        }
        if (isset($map['BlockIp'])) {
            $model->blockIp = $map['BlockIp'];
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

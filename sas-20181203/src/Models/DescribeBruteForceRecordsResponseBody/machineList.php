<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class machineList extends Model
{
    /**
     * @var bool
     */
    public $aliNetOnline;
    /**
     * @var int
     */
    public $blockExpireDate;
    /**
     * @var string
     */
    public $blockIp;
    /**
     * @var string
     */
    public $blockType;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $instanceName;
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
    public $port;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var string
     */
    public $source;
    /**
     * @var int
     */
    public $status;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

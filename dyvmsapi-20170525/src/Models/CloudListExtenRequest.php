<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudListExtenRequest extends Model
{
    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $callPower;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $exten;

    /**
     * @var int
     */
    public $ibRecord;

    /**
     * @var int
     */
    public $isBind;

    /**
     * @var string
     */
    public $isOb;

    /**
     * @var int
     */
    public $jitterBuffer;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $obRecord;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'areaCode' => 'AreaCode',
        'callPower' => 'CallPower',
        'enterpriseId' => 'EnterpriseId',
        'exten' => 'Exten',
        'ibRecord' => 'IbRecord',
        'isBind' => 'IsBind',
        'isOb' => 'IsOb',
        'jitterBuffer' => 'JitterBuffer',
        'limit' => 'Limit',
        'obRecord' => 'ObRecord',
        'offset' => 'Offset',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }

        if (null !== $this->callPower) {
            $res['CallPower'] = $this->callPower;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->exten) {
            $res['Exten'] = $this->exten;
        }

        if (null !== $this->ibRecord) {
            $res['IbRecord'] = $this->ibRecord;
        }

        if (null !== $this->isBind) {
            $res['IsBind'] = $this->isBind;
        }

        if (null !== $this->isOb) {
            $res['IsOb'] = $this->isOb;
        }

        if (null !== $this->jitterBuffer) {
            $res['JitterBuffer'] = $this->jitterBuffer;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->obRecord) {
            $res['ObRecord'] = $this->obRecord;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }

        if (isset($map['CallPower'])) {
            $model->callPower = $map['CallPower'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Exten'])) {
            $model->exten = $map['Exten'];
        }

        if (isset($map['IbRecord'])) {
            $model->ibRecord = $map['IbRecord'];
        }

        if (isset($map['IsBind'])) {
            $model->isBind = $map['IsBind'];
        }

        if (isset($map['IsOb'])) {
            $model->isOb = $map['IsOb'];
        }

        if (isset($map['JitterBuffer'])) {
            $model->jitterBuffer = $map['JitterBuffer'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['ObRecord'])) {
            $model->obRecord = $map['ObRecord'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

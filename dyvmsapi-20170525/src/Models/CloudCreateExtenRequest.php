<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudCreateExtenRequest extends Model
{
    /**
     * @var string
     */
    public $allow;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $callPower;

    /**
     * @var string
     */
    public $denoise;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $exten;

    /**
     * @var string
     */
    public $iadName;

    /**
     * @var int
     */
    public $ibRecord;

    /**
     * @var int
     */
    public $isDirect;

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
    public $obRecord;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $property;

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
        'allow' => 'Allow',
        'areaCode' => 'AreaCode',
        'callPower' => 'CallPower',
        'denoise' => 'Denoise',
        'enterpriseId' => 'EnterpriseId',
        'exten' => 'Exten',
        'iadName' => 'IadName',
        'ibRecord' => 'IbRecord',
        'isDirect' => 'IsDirect',
        'isOb' => 'IsOb',
        'jitterBuffer' => 'JitterBuffer',
        'obRecord' => 'ObRecord',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'property' => 'Property',
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
        if (null !== $this->allow) {
            $res['Allow'] = $this->allow;
        }

        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }

        if (null !== $this->callPower) {
            $res['CallPower'] = $this->callPower;
        }

        if (null !== $this->denoise) {
            $res['Denoise'] = $this->denoise;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->exten) {
            $res['Exten'] = $this->exten;
        }

        if (null !== $this->iadName) {
            $res['IadName'] = $this->iadName;
        }

        if (null !== $this->ibRecord) {
            $res['IbRecord'] = $this->ibRecord;
        }

        if (null !== $this->isDirect) {
            $res['IsDirect'] = $this->isDirect;
        }

        if (null !== $this->isOb) {
            $res['IsOb'] = $this->isOb;
        }

        if (null !== $this->jitterBuffer) {
            $res['JitterBuffer'] = $this->jitterBuffer;
        }

        if (null !== $this->obRecord) {
            $res['ObRecord'] = $this->obRecord;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->property) {
            $res['Property'] = $this->property;
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
        if (isset($map['Allow'])) {
            $model->allow = $map['Allow'];
        }

        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }

        if (isset($map['CallPower'])) {
            $model->callPower = $map['CallPower'];
        }

        if (isset($map['Denoise'])) {
            $model->denoise = $map['Denoise'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Exten'])) {
            $model->exten = $map['Exten'];
        }

        if (isset($map['IadName'])) {
            $model->iadName = $map['IadName'];
        }

        if (isset($map['IbRecord'])) {
            $model->ibRecord = $map['IbRecord'];
        }

        if (isset($map['IsDirect'])) {
            $model->isDirect = $map['IsDirect'];
        }

        if (isset($map['IsOb'])) {
            $model->isOb = $map['IsOb'];
        }

        if (isset($map['JitterBuffer'])) {
            $model->jitterBuffer = $map['JitterBuffer'];
        }

        if (isset($map['ObRecord'])) {
            $model->obRecord = $map['ObRecord'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Property'])) {
            $model->property = $map['Property'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetExtenResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
     * @var int
     */
    public $bindGatewayId;

    /**
     * @var string
     */
    public $callPower;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $denoise;

    /**
     * @var string
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
    public $id;

    /**
     * @var string
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
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'allow' => 'Allow',
        'areaCode' => 'AreaCode',
        'bindGatewayId' => 'BindGatewayId',
        'callPower' => 'CallPower',
        'createTime' => 'CreateTime',
        'denoise' => 'Denoise',
        'enterpriseId' => 'EnterpriseId',
        'exten' => 'Exten',
        'ibRecord' => 'IbRecord',
        'id' => 'Id',
        'isDirect' => 'IsDirect',
        'isOb' => 'IsOb',
        'jitterBuffer' => 'JitterBuffer',
        'obRecord' => 'ObRecord',
        'password' => 'Password',
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

        if (null !== $this->bindGatewayId) {
            $res['BindGatewayId'] = $this->bindGatewayId;
        }

        if (null !== $this->callPower) {
            $res['CallPower'] = $this->callPower;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->ibRecord) {
            $res['IbRecord'] = $this->ibRecord;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (null !== $this->password) {
            $res['Password'] = $this->password;
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

        if (isset($map['BindGatewayId'])) {
            $model->bindGatewayId = $map['BindGatewayId'];
        }

        if (isset($map['CallPower'])) {
            $model->callPower = $map['CallPower'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['IbRecord'])) {
            $model->ibRecord = $map['IbRecord'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;

class CreateOperatorRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var string
     */
    public $bgObject;

    /**
     * @var string
     */
    public $bgSystem;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $curEmpId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $noCheck;

    /**
     * @var bool
     */
    public $noRisk;

    /**
     * @var int
     */
    public $reqTimestamp;
    protected $_name = [
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'bgObject' => 'BgObject',
        'bgSystem' => 'BgSystem',
        'code' => 'Code',
        'curEmpId' => 'CurEmpId',
        'name' => 'Name',
        'noCheck' => 'NoCheck',
        'noRisk' => 'NoRisk',
        'reqTimestamp' => 'ReqTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->bgObject) {
            $res['BgObject'] = $this->bgObject;
        }

        if (null !== $this->bgSystem) {
            $res['BgSystem'] = $this->bgSystem;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->curEmpId) {
            $res['CurEmpId'] = $this->curEmpId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->noCheck) {
            $res['NoCheck'] = $this->noCheck;
        }

        if (null !== $this->noRisk) {
            $res['NoRisk'] = $this->noRisk;
        }

        if (null !== $this->reqTimestamp) {
            $res['ReqTimestamp'] = $this->reqTimestamp;
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
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['BgObject'])) {
            $model->bgObject = $map['BgObject'];
        }

        if (isset($map['BgSystem'])) {
            $model->bgSystem = $map['BgSystem'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CurEmpId'])) {
            $model->curEmpId = $map['CurEmpId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NoCheck'])) {
            $model->noCheck = $map['NoCheck'];
        }

        if (isset($map['NoRisk'])) {
            $model->noRisk = $map['NoRisk'];
        }

        if (isset($map['ReqTimestamp'])) {
            $model->reqTimestamp = $map['ReqTimestamp'];
        }

        return $model;
    }
}

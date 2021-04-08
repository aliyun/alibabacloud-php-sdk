<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models;

use AlibabaCloud\Tea\Model;

class VerifyBankElementRequest extends Model
{
    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $bankCardNo;

    /**
     * @var string
     */
    public $idNo;

    /**
     * @var string
     */
    public $bankCardUrl;

    /**
     * @var string
     */
    public $bankCardFile;

    /**
     * @var string
     */
    public $idName;

    /**
     * @var string
     */
    public $mobile;
    protected $_name = [
        'sceneId'      => 'SceneId',
        'outerOrderNo' => 'OuterOrderNo',
        'mode'         => 'Mode',
        'bankCardNo'   => 'BankCardNo',
        'idNo'         => 'IdNo',
        'bankCardUrl'  => 'BankCardUrl',
        'bankCardFile' => 'BankCardFile',
        'idName'       => 'IdName',
        'mobile'       => 'Mobile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->bankCardNo) {
            $res['BankCardNo'] = $this->bankCardNo;
        }
        if (null !== $this->idNo) {
            $res['IdNo'] = $this->idNo;
        }
        if (null !== $this->bankCardUrl) {
            $res['BankCardUrl'] = $this->bankCardUrl;
        }
        if (null !== $this->bankCardFile) {
            $res['BankCardFile'] = $this->bankCardFile;
        }
        if (null !== $this->idName) {
            $res['IdName'] = $this->idName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyBankElementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['BankCardNo'])) {
            $model->bankCardNo = $map['BankCardNo'];
        }
        if (isset($map['IdNo'])) {
            $model->idNo = $map['IdNo'];
        }
        if (isset($map['BankCardUrl'])) {
            $model->bankCardUrl = $map['BankCardUrl'];
        }
        if (isset($map['BankCardFile'])) {
            $model->bankCardFile = $map['BankCardFile'];
        }
        if (isset($map['IdName'])) {
            $model->idName = $map['IdName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        return $model;
    }
}

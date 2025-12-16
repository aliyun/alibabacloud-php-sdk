<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class InitAuthVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $callbackToken;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $cardPageNumber;

    /**
     * @var string
     */
    public $cardType;

    /**
     * @var string
     */
    public $docScanMode;

    /**
     * @var string
     */
    public $idSpoof;

    /**
     * @var string
     */
    public $metaInfo;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $sceneId;
    protected $_name = [
        'callbackToken' => 'CallbackToken',
        'callbackUrl' => 'CallbackUrl',
        'cardPageNumber' => 'CardPageNumber',
        'cardType' => 'CardType',
        'docScanMode' => 'DocScanMode',
        'idSpoof' => 'IdSpoof',
        'metaInfo' => 'MetaInfo',
        'outerOrderNo' => 'OuterOrderNo',
        'productCode' => 'ProductCode',
        'sceneId' => 'SceneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackToken) {
            $res['CallbackToken'] = $this->callbackToken;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->cardPageNumber) {
            $res['CardPageNumber'] = $this->cardPageNumber;
        }

        if (null !== $this->cardType) {
            $res['CardType'] = $this->cardType;
        }

        if (null !== $this->docScanMode) {
            $res['DocScanMode'] = $this->docScanMode;
        }

        if (null !== $this->idSpoof) {
            $res['IdSpoof'] = $this->idSpoof;
        }

        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }

        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
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
        if (isset($map['CallbackToken'])) {
            $model->callbackToken = $map['CallbackToken'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['CardPageNumber'])) {
            $model->cardPageNumber = $map['CardPageNumber'];
        }

        if (isset($map['CardType'])) {
            $model->cardType = $map['CardType'];
        }

        if (isset($map['DocScanMode'])) {
            $model->docScanMode = $map['DocScanMode'];
        }

        if (isset($map['IdSpoof'])) {
            $model->idSpoof = $map['IdSpoof'];
        }

        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }

        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}

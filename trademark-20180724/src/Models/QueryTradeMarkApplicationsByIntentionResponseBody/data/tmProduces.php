<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsByIntentionResponseBody\data;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsByIntentionResponseBody\data\tmProduces\firstClassification;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsByIntentionResponseBody\data\tmProduces\thirdClassification;
use AlibabaCloud\Tea\Model;

class tmProduces extends Model
{
    /**
     * @var string
     */
    public $principalDescription;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $status;

    /**
     * @var float
     */
    public $orderPrice;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $materialName;

    /**
     * @var int
     */
    public $principalValue;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var float
     */
    public $servicePrice;

    /**
     * @var string
     */
    public $tmIcon;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var int
     */
    public $supplementId;

    /**
     * @var string
     */
    public $loaUrl;

    /**
     * @var string
     */
    public $tmNumber;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $supplementStatus;

    /**
     * @var float
     */
    public $totalPrice;

    /**
     * @var thirdClassification
     */
    public $thirdClassification;

    /**
     * @var firstClassification
     */
    public $firstClassification;
    protected $_name = [
        'principalDescription' => 'PrincipalDescription',
        'type'                 => 'Type',
        'status'               => 'Status',
        'orderPrice'           => 'OrderPrice',
        'updateTime'           => 'UpdateTime',
        'materialName'         => 'MaterialName',
        'principalValue'       => 'PrincipalValue',
        'createTime'           => 'CreateTime',
        'bizId'                => 'BizId',
        'servicePrice'         => 'ServicePrice',
        'tmIcon'               => 'TmIcon',
        'tmName'               => 'TmName',
        'materialId'           => 'MaterialId',
        'supplementId'         => 'SupplementId',
        'loaUrl'               => 'LoaUrl',
        'tmNumber'             => 'TmNumber',
        'note'                 => 'Note',
        'supplementStatus'     => 'SupplementStatus',
        'totalPrice'           => 'TotalPrice',
        'thirdClassification'  => 'ThirdClassification',
        'firstClassification'  => 'FirstClassification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->principalDescription) {
            $res['PrincipalDescription'] = $this->principalDescription;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->materialName) {
            $res['MaterialName'] = $this->materialName;
        }
        if (null !== $this->principalValue) {
            $res['PrincipalValue'] = $this->principalValue;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->servicePrice) {
            $res['ServicePrice'] = $this->servicePrice;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->tmNumber) {
            $res['TmNumber'] = $this->tmNumber;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->supplementStatus) {
            $res['SupplementStatus'] = $this->supplementStatus;
        }
        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
        }
        if (null !== $this->thirdClassification) {
            $res['ThirdClassification'] = null !== $this->thirdClassification ? $this->thirdClassification->toMap() : null;
        }
        if (null !== $this->firstClassification) {
            $res['FirstClassification'] = null !== $this->firstClassification ? $this->firstClassification->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tmProduces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrincipalDescription'])) {
            $model->principalDescription = $map['PrincipalDescription'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['MaterialName'])) {
            $model->materialName = $map['MaterialName'];
        }
        if (isset($map['PrincipalValue'])) {
            $model->principalValue = $map['PrincipalValue'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ServicePrice'])) {
            $model->servicePrice = $map['ServicePrice'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['TmNumber'])) {
            $model->tmNumber = $map['TmNumber'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['SupplementStatus'])) {
            $model->supplementStatus = $map['SupplementStatus'];
        }
        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }
        if (isset($map['ThirdClassification'])) {
            $model->thirdClassification = thirdClassification::fromMap($map['ThirdClassification']);
        }
        if (isset($map['FirstClassification'])) {
            $model->firstClassification = firstClassification::fromMap($map['FirstClassification']);
        }

        return $model;
    }
}

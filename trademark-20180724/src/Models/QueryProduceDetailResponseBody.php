<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryProduceDetailResponseBody\flags;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryProduceDetailResponseBody\leafCodes;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryProduceDetailResponseBody\materialDetail;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryProduceDetailResponseBody\rootCode;
use AlibabaCloud\Tea\Model;

class QueryProduceDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceptUrl;

    /**
     * @var string
     */
    public $agreementId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $cnInfoUrl;

    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var flags
     */
    public $flags;

    /**
     * @var string
     */
    public $grayIconUrl;

    /**
     * @var string
     */
    public $issueDate;

    /**
     * @var leafCodes
     */
    public $leafCodes;

    /**
     * @var string
     */
    public $loaUrl;

    /**
     * @var materialDetail
     */
    public $materialDetail;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rootCode
     */
    public $rootCode;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $submitCount;

    /**
     * @var string
     */
    public $tmIcon;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var int
     */
    public $tmNameType;

    /**
     * @var string
     */
    public $tmNumber;

    /**
     * @var string
     */
    public $tmOrderId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'acceptUrl'      => 'AcceptUrl',
        'agreementId'    => 'AgreementId',
        'bizId'          => 'BizId',
        'cnInfoUrl'      => 'CnInfoUrl',
        'extendInfo'     => 'ExtendInfo',
        'flags'          => 'Flags',
        'grayIconUrl'    => 'GrayIconUrl',
        'issueDate'      => 'IssueDate',
        'leafCodes'      => 'LeafCodes',
        'loaUrl'         => 'LoaUrl',
        'materialDetail' => 'MaterialDetail',
        'note'           => 'Note',
        'orderId'        => 'OrderId',
        'principalName'  => 'PrincipalName',
        'requestId'      => 'RequestId',
        'rootCode'       => 'RootCode',
        'status'         => 'Status',
        'submitCount'    => 'SubmitCount',
        'tmIcon'         => 'TmIcon',
        'tmName'         => 'TmName',
        'tmNameType'     => 'TmNameType',
        'tmNumber'       => 'TmNumber',
        'tmOrderId'      => 'TmOrderId',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptUrl) {
            $res['AcceptUrl'] = $this->acceptUrl;
        }
        if (null !== $this->agreementId) {
            $res['AgreementId'] = $this->agreementId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->cnInfoUrl) {
            $res['CnInfoUrl'] = $this->cnInfoUrl;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->flags) {
            $res['Flags'] = null !== $this->flags ? $this->flags->toMap() : null;
        }
        if (null !== $this->grayIconUrl) {
            $res['GrayIconUrl'] = $this->grayIconUrl;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
        }
        if (null !== $this->leafCodes) {
            $res['LeafCodes'] = null !== $this->leafCodes ? $this->leafCodes->toMap() : null;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->materialDetail) {
            $res['MaterialDetail'] = null !== $this->materialDetail ? $this->materialDetail->toMap() : null;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rootCode) {
            $res['RootCode'] = null !== $this->rootCode ? $this->rootCode->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitCount) {
            $res['SubmitCount'] = $this->submitCount;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmNameType) {
            $res['TmNameType'] = $this->tmNameType;
        }
        if (null !== $this->tmNumber) {
            $res['TmNumber'] = $this->tmNumber;
        }
        if (null !== $this->tmOrderId) {
            $res['TmOrderId'] = $this->tmOrderId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryProduceDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptUrl'])) {
            $model->acceptUrl = $map['AcceptUrl'];
        }
        if (isset($map['AgreementId'])) {
            $model->agreementId = $map['AgreementId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CnInfoUrl'])) {
            $model->cnInfoUrl = $map['CnInfoUrl'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['Flags'])) {
            $model->flags = flags::fromMap($map['Flags']);
        }
        if (isset($map['GrayIconUrl'])) {
            $model->grayIconUrl = $map['GrayIconUrl'];
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }
        if (isset($map['LeafCodes'])) {
            $model->leafCodes = leafCodes::fromMap($map['LeafCodes']);
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['MaterialDetail'])) {
            $model->materialDetail = materialDetail::fromMap($map['MaterialDetail']);
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RootCode'])) {
            $model->rootCode = rootCode::fromMap($map['RootCode']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitCount'])) {
            $model->submitCount = $map['SubmitCount'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmNameType'])) {
            $model->tmNameType = $map['TmNameType'];
        }
        if (isset($map['TmNumber'])) {
            $model->tmNumber = $map['TmNumber'];
        }
        if (isset($map['TmOrderId'])) {
            $model->tmOrderId = $map['TmOrderId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

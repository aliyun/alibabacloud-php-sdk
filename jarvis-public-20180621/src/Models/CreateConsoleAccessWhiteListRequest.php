<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\Tea\Model;

class CreateConsoleAccessWhiteListRequest extends Model
{
    /**
     * @var int
     */
    public $dstPort;

    /**
     * @var string
     */
    public $instanceIdList;

    /**
     * @var string
     */
    public $instanceInfoList;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $liveTime;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var int
     */
    public $whiteListType;
    protected $_name = [
        'dstPort'          => 'DstPort',
        'instanceIdList'   => 'InstanceIdList',
        'instanceInfoList' => 'InstanceInfoList',
        'lang'             => 'Lang',
        'liveTime'         => 'LiveTime',
        'note'             => 'Note',
        'productName'      => 'ProductName',
        'resourceOwnerId'  => 'ResourceOwnerId',
        'sourceCode'       => 'SourceCode',
        'sourceIp'         => 'SourceIp',
        'srcIP'            => 'SrcIP',
        'whiteListType'    => 'WhiteListType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->instanceInfoList) {
            $res['InstanceInfoList'] = $this->instanceInfoList;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->liveTime) {
            $res['LiveTime'] = $this->liveTime;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }
        if (null !== $this->whiteListType) {
            $res['WhiteListType'] = $this->whiteListType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsoleAccessWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['InstanceIdList'])) {
            $model->instanceIdList = $map['InstanceIdList'];
        }
        if (isset($map['InstanceInfoList'])) {
            $model->instanceInfoList = $map['InstanceInfoList'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LiveTime'])) {
            $model->liveTime = $map['LiveTime'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }
        if (isset($map['WhiteListType'])) {
            $model->whiteListType = $map['WhiteListType'];
        }

        return $model;
    }
}

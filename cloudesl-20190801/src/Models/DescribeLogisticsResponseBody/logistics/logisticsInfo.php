<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeLogisticsResponseBody\logistics;

use AlibabaCloud\Tea\Model;

class logisticsInfo extends Model
{
    /**
     * @var bool
     */
    public $acceptStatus;

    /**
     * @var string
     */
    public $apMacList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eslMacList;

    /**
     * @var string
     */
    public $hasSend;

    /**
     * @var string
     */
    public $logisticsDocuments;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $poNumber;

    /**
     * @var string
     */
    public $prNumber;
    protected $_name = [
        'acceptStatus'       => 'AcceptStatus',
        'apMacList'          => 'ApMacList',
        'description'        => 'Description',
        'eslMacList'         => 'EslMacList',
        'hasSend'            => 'HasSend',
        'logisticsDocuments' => 'LogisticsDocuments',
        'orderId'            => 'OrderId',
        'poNumber'           => 'PoNumber',
        'prNumber'           => 'PrNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptStatus) {
            $res['AcceptStatus'] = $this->acceptStatus;
        }
        if (null !== $this->apMacList) {
            $res['ApMacList'] = $this->apMacList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eslMacList) {
            $res['EslMacList'] = $this->eslMacList;
        }
        if (null !== $this->hasSend) {
            $res['HasSend'] = $this->hasSend;
        }
        if (null !== $this->logisticsDocuments) {
            $res['LogisticsDocuments'] = $this->logisticsDocuments;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->poNumber) {
            $res['PoNumber'] = $this->poNumber;
        }
        if (null !== $this->prNumber) {
            $res['PrNumber'] = $this->prNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logisticsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptStatus'])) {
            $model->acceptStatus = $map['AcceptStatus'];
        }
        if (isset($map['ApMacList'])) {
            $model->apMacList = $map['ApMacList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EslMacList'])) {
            $model->eslMacList = $map['EslMacList'];
        }
        if (isset($map['HasSend'])) {
            $model->hasSend = $map['HasSend'];
        }
        if (isset($map['LogisticsDocuments'])) {
            $model->logisticsDocuments = $map['LogisticsDocuments'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PoNumber'])) {
            $model->poNumber = $map['PoNumber'];
        }
        if (isset($map['PrNumber'])) {
            $model->prNumber = $map['PrNumber'];
        }

        return $model;
    }
}

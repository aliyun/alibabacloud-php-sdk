<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeSupplementResponseBody\userFiles;
use AlibabaCloud\Tea\Model;

class DescribeSupplementResponseBody extends Model
{
    /**
     * @example 1569168000000
     *
     * @var int
     */
    public $acceptExpirationDate;

    /**
     * @example 1568736000000
     *
     * @var int
     */
    public $acceptTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $applicationType;

    /**
     * @var string
     */
    public $content;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/supplement/27102013/4a36c25c.pdf?Expires=1568721724&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=sOaVgAigLlFruOcYDdusZGl5hwk%3D
     *
     * @var string
     */
    public $officialFile;

    /**
     * @example 1568684449000
     *
     * @var int
     */
    public $operateTime;

    /**
     * @example 9A51DFA3-E149-48C1-842A-7CAEF0CF31BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1569772800000
     *
     * @var int
     */
    public $sbjExpirationDate;

    /**
     * @example 1568649600000
     *
     * @var int
     */
    public $sendTime;

    /**
     * @example B1021TMZC00000040188506ZCSL0100016
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @example 5088
     *
     * @var int
     */
    public $supplementId;

    /**
     * @example 1
     *
     * @var int
     */
    public $supplementStatus;

    /**
     * @example 123456765
     *
     * @var string
     */
    public $trademarkNumber;

    /**
     * @var userFiles
     */
    public $userFiles;
    protected $_name = [
        'acceptExpirationDate' => 'AcceptExpirationDate',
        'acceptTime'           => 'AcceptTime',
        'applicationType'      => 'ApplicationType',
        'content'              => 'Content',
        'officialFile'         => 'OfficialFile',
        'operateTime'          => 'OperateTime',
        'requestId'            => 'RequestId',
        'sbjExpirationDate'    => 'SbjExpirationDate',
        'sendTime'             => 'SendTime',
        'serialNumber'         => 'SerialNumber',
        'supplementId'         => 'SupplementId',
        'supplementStatus'     => 'SupplementStatus',
        'trademarkNumber'      => 'TrademarkNumber',
        'userFiles'            => 'UserFiles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptExpirationDate) {
            $res['AcceptExpirationDate'] = $this->acceptExpirationDate;
        }
        if (null !== $this->acceptTime) {
            $res['AcceptTime'] = $this->acceptTime;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->officialFile) {
            $res['OfficialFile'] = $this->officialFile;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sbjExpirationDate) {
            $res['SbjExpirationDate'] = $this->sbjExpirationDate;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
        }
        if (null !== $this->supplementStatus) {
            $res['SupplementStatus'] = $this->supplementStatus;
        }
        if (null !== $this->trademarkNumber) {
            $res['TrademarkNumber'] = $this->trademarkNumber;
        }
        if (null !== $this->userFiles) {
            $res['UserFiles'] = null !== $this->userFiles ? $this->userFiles->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSupplementResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptExpirationDate'])) {
            $model->acceptExpirationDate = $map['AcceptExpirationDate'];
        }
        if (isset($map['AcceptTime'])) {
            $model->acceptTime = $map['AcceptTime'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['OfficialFile'])) {
            $model->officialFile = $map['OfficialFile'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SbjExpirationDate'])) {
            $model->sbjExpirationDate = $map['SbjExpirationDate'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }
        if (isset($map['SupplementStatus'])) {
            $model->supplementStatus = $map['SupplementStatus'];
        }
        if (isset($map['TrademarkNumber'])) {
            $model->trademarkNumber = $map['TrademarkNumber'];
        }
        if (isset($map['UserFiles'])) {
            $model->userFiles = userFiles::fromMap($map['UserFiles']);
        }

        return $model;
    }
}

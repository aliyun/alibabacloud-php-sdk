<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaSearchPageListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaSearchPageListResponseBody\items\request;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaSearchPageListResponseBody\items\response;

class items extends Model
{
    /**
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $bankCard;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $identifyNum;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var request
     */
    public $request;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestJson;

    /**
     * @var response
     */
    public $response;

    /**
     * @var string
     */
    public $responseJson;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $vehicleNum;
    protected $_name = [
        'api' => 'Api',
        'apiName' => 'ApiName',
        'bankCard' => 'BankCard',
        'bizCode' => 'BizCode',
        'date' => 'Date',
        'identifyNum' => 'IdentifyNum',
        'ispName' => 'IspName',
        'mobile' => 'Mobile',
        'request' => 'Request',
        'requestId' => 'RequestId',
        'requestJson' => 'RequestJson',
        'response' => 'Response',
        'responseJson' => 'ResponseJson',
        'subCode' => 'SubCode',
        'userName' => 'UserName',
        'vehicleNum' => 'VehicleNum',
    ];

    public function validate()
    {
        if (null !== $this->request) {
            $this->request->validate();
        }
        if (null !== $this->response) {
            $this->response->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }

        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->bankCard) {
            $res['BankCard'] = $this->bankCard;
        }

        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->identifyNum) {
            $res['IdentifyNum'] = $this->identifyNum;
        }

        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->request) {
            $res['Request'] = null !== $this->request ? $this->request->toArray($noStream) : $this->request;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requestJson) {
            $res['RequestJson'] = $this->requestJson;
        }

        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
        }

        if (null !== $this->responseJson) {
            $res['ResponseJson'] = $this->responseJson;
        }

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->vehicleNum) {
            $res['VehicleNum'] = $this->vehicleNum;
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
        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }

        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['BankCard'])) {
            $model->bankCard = $map['BankCard'];
        }

        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['IdentifyNum'])) {
            $model->identifyNum = $map['IdentifyNum'];
        }

        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['Request'])) {
            $model->request = request::fromMap($map['Request']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RequestJson'])) {
            $model->requestJson = $map['RequestJson'];
        }

        if (isset($map['Response'])) {
            $model->response = response::fromMap($map['Response']);
        }

        if (isset($map['ResponseJson'])) {
            $model->responseJson = $map['ResponseJson'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['VehicleNum'])) {
            $model->vehicleNum = $map['VehicleNum'];
        }

        return $model;
    }
}

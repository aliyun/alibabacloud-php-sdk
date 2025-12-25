<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailProjectResponseBody\accessDeniedDetail;

class DetailProjectResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var int
     */
    public $businessId;

    /**
     * @var string
     */
    public $businessName;

    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'businessId' => 'BusinessId',
        'businessName' => 'BusinessName',
        'code' => 'Code',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'message' => 'Message',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }

        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }

        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}

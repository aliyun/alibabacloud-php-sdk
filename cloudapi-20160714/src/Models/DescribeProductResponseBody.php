<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeProductResponseBody extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subscribeMode;

    /**
     * @var int
     */
    public $domain;

    /**
     * @var int
     */
    public $subscribeNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'status'          => 'Status',
        'subscribeMode'   => 'SubscribeMode',
        'domain'          => 'Domain',
        'subscribeNumber' => 'SubscribeNumber',
        'requestId'       => 'RequestId',
        'modifiedTime'    => 'ModifiedTime',
        'description'     => 'Description',
        'groupId'         => 'GroupId',
        'productId'       => 'ProductId',
        'name'            => 'Name',
        'createdTime'     => 'CreatedTime',
        'productCode'     => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subscribeMode) {
            $res['SubscribeMode'] = $this->subscribeMode;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->subscribeNumber) {
            $res['SubscribeNumber'] = $this->subscribeNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProductResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubscribeMode'])) {
            $model->subscribeMode = $map['SubscribeMode'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['SubscribeNumber'])) {
            $model->subscribeNumber = $map['SubscribeNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}

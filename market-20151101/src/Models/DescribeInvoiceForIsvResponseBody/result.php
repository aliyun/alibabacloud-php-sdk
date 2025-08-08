<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponseBody\result\evaluateList;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponseBody\result\invoiceList;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponseBody\result\receiptUserInfoDto;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInvoiceForIsvResponseBody\result\userAddressDto;

class result extends Model
{
    /**
     * @var string
     */
    public $aliyunPk;

    /**
     * @var string
     */
    public $createTimeStr;

    /**
     * @var evaluateList[]
     */
    public $evaluateList;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $invoiceId;

    /**
     * @var invoiceList[]
     */
    public $invoiceList;

    /**
     * @var string
     */
    public $materialType;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $modifiedTimeStr;

    /**
     * @var string
     */
    public $price;

    /**
     * @var receiptUserInfoDto
     */
    public $receiptUserInfoDto;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var userAddressDto
     */
    public $userAddressDto;
    protected $_name = [
        'aliyunPk' => 'AliyunPk',
        'createTimeStr' => 'CreateTimeStr',
        'evaluateList' => 'EvaluateList',
        'id' => 'Id',
        'invoiceId' => 'InvoiceId',
        'invoiceList' => 'InvoiceList',
        'materialType' => 'MaterialType',
        'modifiedTime' => 'ModifiedTime',
        'modifiedTimeStr' => 'ModifiedTimeStr',
        'price' => 'Price',
        'receiptUserInfoDto' => 'ReceiptUserInfoDto',
        'status' => 'Status',
        'title' => 'Title',
        'type' => 'Type',
        'userAddressDto' => 'UserAddressDto',
    ];

    public function validate()
    {
        if (\is_array($this->evaluateList)) {
            Model::validateArray($this->evaluateList);
        }
        if (\is_array($this->invoiceList)) {
            Model::validateArray($this->invoiceList);
        }
        if (null !== $this->receiptUserInfoDto) {
            $this->receiptUserInfoDto->validate();
        }
        if (null !== $this->userAddressDto) {
            $this->userAddressDto->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['AliyunPk'] = $this->aliyunPk;
        }

        if (null !== $this->createTimeStr) {
            $res['CreateTimeStr'] = $this->createTimeStr;
        }

        if (null !== $this->evaluateList) {
            if (\is_array($this->evaluateList)) {
                $res['EvaluateList'] = [];
                $n1 = 0;
                foreach ($this->evaluateList as $item1) {
                    $res['EvaluateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->invoiceId) {
            $res['InvoiceId'] = $this->invoiceId;
        }

        if (null !== $this->invoiceList) {
            if (\is_array($this->invoiceList)) {
                $res['InvoiceList'] = [];
                $n1 = 0;
                foreach ($this->invoiceList as $item1) {
                    $res['InvoiceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->modifiedTimeStr) {
            $res['ModifiedTimeStr'] = $this->modifiedTimeStr;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->receiptUserInfoDto) {
            $res['ReceiptUserInfoDto'] = null !== $this->receiptUserInfoDto ? $this->receiptUserInfoDto->toArray($noStream) : $this->receiptUserInfoDto;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userAddressDto) {
            $res['UserAddressDto'] = null !== $this->userAddressDto ? $this->userAddressDto->toArray($noStream) : $this->userAddressDto;
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
        if (isset($map['AliyunPk'])) {
            $model->aliyunPk = $map['AliyunPk'];
        }

        if (isset($map['CreateTimeStr'])) {
            $model->createTimeStr = $map['CreateTimeStr'];
        }

        if (isset($map['EvaluateList'])) {
            if (!empty($map['EvaluateList'])) {
                $model->evaluateList = [];
                $n1 = 0;
                foreach ($map['EvaluateList'] as $item1) {
                    $model->evaluateList[$n1] = evaluateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InvoiceId'])) {
            $model->invoiceId = $map['InvoiceId'];
        }

        if (isset($map['InvoiceList'])) {
            if (!empty($map['InvoiceList'])) {
                $model->invoiceList = [];
                $n1 = 0;
                foreach ($map['InvoiceList'] as $item1) {
                    $model->invoiceList[$n1] = invoiceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['ModifiedTimeStr'])) {
            $model->modifiedTimeStr = $map['ModifiedTimeStr'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['ReceiptUserInfoDto'])) {
            $model->receiptUserInfoDto = receiptUserInfoDto::fromMap($map['ReceiptUserInfoDto']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserAddressDto'])) {
            $model->userAddressDto = userAddressDto::fromMap($map['UserAddressDto']);
        }

        return $model;
    }
}

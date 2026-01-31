<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class ListInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $certificateStatus;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $showSize;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'brand' => 'Brand',
        'certificateStatus' => 'CertificateStatus',
        'certificateType' => 'CertificateType',
        'currentPage' => 'CurrentPage',
        'instanceType' => 'InstanceType',
        'keyword' => 'Keyword',
        'resourceGroupId' => 'ResourceGroupId',
        'showSize' => 'ShowSize',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->certificateStatus) {
            $res['CertificateStatus'] = $this->certificateStatus;
        }

        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['CertificateStatus'])) {
            $model->certificateStatus = $map['CertificateStatus'];
        }

        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

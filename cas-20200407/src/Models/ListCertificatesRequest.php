<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class ListCertificatesRequest extends Model
{
    /**
     * @var string
     */
    public $certificateSource;

    /**
     * @var string
     */
    public $certificateStatus;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $instanceId;

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
    protected $_name = [
        'certificateSource' => 'CertificateSource',
        'certificateStatus' => 'CertificateStatus',
        'currentPage' => 'CurrentPage',
        'instanceId' => 'InstanceId',
        'keyword' => 'Keyword',
        'resourceGroupId' => 'ResourceGroupId',
        'showSize' => 'ShowSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateSource) {
            $res['CertificateSource'] = $this->certificateSource;
        }

        if (null !== $this->certificateStatus) {
            $res['CertificateStatus'] = $this->certificateStatus;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateSource'])) {
            $model->certificateSource = $map['CertificateSource'];
        }

        if (isset($map['CertificateStatus'])) {
            $model->certificateStatus = $map['CertificateStatus'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        return $model;
    }
}

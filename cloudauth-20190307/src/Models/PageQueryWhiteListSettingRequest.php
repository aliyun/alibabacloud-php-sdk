<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class PageQueryWhiteListSettingRequest extends Model
{
    /**
     * @var string
     */
    public $certNo;
    /**
     * @var string
     */
    public $certifyId;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $sceneId;
    /**
     * @var string
     */
    public $serviceCode;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $validEndDate;
    /**
     * @var string
     */
    public $validStartDate;
    protected $_name = [
        'certNo'         => 'CertNo',
        'certifyId'      => 'CertifyId',
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'sceneId'        => 'SceneId',
        'serviceCode'    => 'ServiceCode',
        'status'         => 'Status',
        'validEndDate'   => 'ValidEndDate',
        'validStartDate' => 'ValidStartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }

        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->validEndDate) {
            $res['ValidEndDate'] = $this->validEndDate;
        }

        if (null !== $this->validStartDate) {
            $res['ValidStartDate'] = $this->validStartDate;
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
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }

        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ValidEndDate'])) {
            $model->validEndDate = $map['ValidEndDate'];
        }

        if (isset($map['ValidStartDate'])) {
            $model->validStartDate = $map['ValidStartDate'];
        }

        return $model;
    }
}

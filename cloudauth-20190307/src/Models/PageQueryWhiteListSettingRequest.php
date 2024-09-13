<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class PageQueryWhiteListSettingRequest extends Model
{
    /**
     * @example 330103xxxxxxxxxxxx
     *
     * @var string
     */
    public $certNo;

    /**
     * @example sha75b4e19a1ddda059b920757b0e12b
     *
     * @var string
     */
    public $certifyId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1000000xxx
     *
     * @var int
     */
    public $sceneId;

    /**
     * @example antcloudauth
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example VALID
     *
     * @var string
     */
    public $status;

    /**
     * @example 1725379200000
     *
     * @var string
     */
    public $validEndDate;

    /**
     * @example 1725120000000
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return PageQueryWhiteListSettingRequest
     */
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

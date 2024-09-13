<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\PageQueryWhiteListSettingResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @example 330103xxxxxxxxxxxx
     *
     * @var string
     */
    public $certNo;

    /**
     * @example sha43d9cabd52d370d9f4cca9468f71e
     *
     * @var string
     */
    public $certifyId;

    /**
     * @example 2024-08-30 14:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-08-30 14:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 234822
     *
     * @var int
     */
    public $id;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example 1000000332
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
     * @example 2024-09-02 13:57:51
     *
     * @var string
     */
    public $validEndDate;

    /**
     * @example 2024-08-30 13:57:51
     *
     * @var string
     */
    public $validStartDate;
    protected $_name = [
        'certNo'         => 'CertNo',
        'certifyId'      => 'CertifyId',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'id'             => 'Id',
        'remark'         => 'Remark',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
     * @return resultObject
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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

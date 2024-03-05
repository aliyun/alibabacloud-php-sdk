<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performancePacks;

use AlibabaCloud\Tea\Model;

class serviceMonthReports extends Model
{
    /**
     * @var string
     */
    public $appointmentId;

    /**
     * @var string
     */
    public $batchGroup;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $remarke;

    /**
     * @var int
     */
    public $serviceApplyId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'appointmentId'  => 'appointmentId',
        'batchGroup'     => 'batchGroup',
        'customerId'     => 'customerId',
        'fileName'       => 'fileName',
        'fileType'       => 'fileType',
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'id'             => 'id',
        'remarke'        => 'remarke',
        'serviceApplyId' => 'serviceApplyId',
        'status'         => 'status',
        'url'            => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appointmentId) {
            $res['appointmentId'] = $this->appointmentId;
        }
        if (null !== $this->batchGroup) {
            $res['batchGroup'] = $this->batchGroup;
        }
        if (null !== $this->customerId) {
            $res['customerId'] = $this->customerId;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->remarke) {
            $res['remarke'] = $this->remarke;
        }
        if (null !== $this->serviceApplyId) {
            $res['serviceApplyId'] = $this->serviceApplyId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceMonthReports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appointmentId'])) {
            $model->appointmentId = $map['appointmentId'];
        }
        if (isset($map['batchGroup'])) {
            $model->batchGroup = $map['batchGroup'];
        }
        if (isset($map['customerId'])) {
            $model->customerId = $map['customerId'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['remarke'])) {
            $model->remarke = $map['remarke'];
        }
        if (isset($map['serviceApplyId'])) {
            $model->serviceApplyId = $map['serviceApplyId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

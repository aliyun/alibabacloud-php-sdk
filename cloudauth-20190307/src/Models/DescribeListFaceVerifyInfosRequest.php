<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DescribeListFaceVerifyInfosRequest extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var int
     */
    public $gmtEnd;

    /**
     * @var int
     */
    public $gmtStart;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'certifyId' => 'CertifyId',
        'gmtEnd' => 'GmtEnd',
        'gmtStart' => 'GmtStart',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sceneId' => 'SceneId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }

        if (null !== $this->gmtEnd) {
            $res['GmtEnd'] = $this->gmtEnd;
        }

        if (null !== $this->gmtStart) {
            $res['GmtStart'] = $this->gmtStart;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
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
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        if (isset($map['GmtEnd'])) {
            $model->gmtEnd = $map['GmtEnd'];
        }

        if (isset($map['GmtStart'])) {
            $model->gmtStart = $map['GmtStart'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

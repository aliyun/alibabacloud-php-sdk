<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssMfd\V20231017\Models;

use AlibabaCloud\Dara\Model;

class ListOssBucketScanInfoRequest extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $fuzzBucketName;

    /**
     * @var int
     */
    public $hasRisk;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'bucketName' => 'BucketName',
        'currentPage' => 'CurrentPage',
        'fuzzBucketName' => 'FuzzBucketName',
        'hasRisk' => 'HasRisk',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->fuzzBucketName) {
            $res['FuzzBucketName'] = $this->fuzzBucketName;
        }

        if (null !== $this->hasRisk) {
            $res['HasRisk'] = $this->hasRisk;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['FuzzBucketName'])) {
            $model->fuzzBucketName = $map['FuzzBucketName'];
        }

        if (isset($map['HasRisk'])) {
            $model->hasRisk = $map['HasRisk'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

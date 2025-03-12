<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListOssBucketScanInfoRequest extends Model
{
    /**
     * @description The name of the bucket.
     *
     * @example iboxpublic****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The page number.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the bucket that is used for fuzzy match.
     *
     * @example test
     *
     * @var string
     */
    public $fuzzBucketName;

    /**
     * @description Specifies whether at-risk objects are detected. Valid values:
     *
     *   **0**: No at-risk objects are detected.
     *   **1**: At-risk objects are detected.
     *
     * @example 1
     *
     * @var int
     */
    public $hasRisk;

    /**
     * @description The language of the content in the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese.
     *   **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The check status of the bucket. Valid values:
     *
     *   **1**: The bucket is not checked.
     *   **2**: All objects in the bucket are being checked.
     *   **3**: Only new objects in the bucket are being checked.
     *   **4**: The bucket is checked.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'bucketName'     => 'BucketName',
        'currentPage'    => 'CurrentPage',
        'fuzzBucketName' => 'FuzzBucketName',
        'hasRisk'        => 'HasRisk',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListOssBucketScanInfoRequest
     */
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

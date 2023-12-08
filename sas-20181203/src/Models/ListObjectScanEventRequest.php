<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListObjectScanEventRequest extends Model
{
    /**
     * @description The name of the OSS bucket.
     *
     * @example ltrbuck****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the alert.
     *
     * @example WebShell
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The MD5 hash value of the file.
     *
     * @example 0552c44e243abdea1729d4507bce****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The key of the file that is stored in an OSS bucket.
     *
     * @example 1/2022/06/23/15/41/16559701077444693a0c6-33b2-4cc2-a99f-9f38b8b8****
     *
     * @var string
     */
    public $ossKey;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The risk level of the alert. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example low
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The method that is used to detect the malicious file. Valid values:
     *
     *   **API**: uses API operations.
     *   **OSS**: uses Object Storage Service (OSS) file check.
     *
     * @example OSS
     *
     * @var string
     */
    public $source;

    /**
     * @description The end of the time range during which the exception is detected.
     *
     * @example 1683862286000
     *
     * @var int
     */
    public $timeEnd;

    /**
     * @description The beginning of the time range during which the exception is detected.
     *
     * @example 1683603086000
     *
     * @var int
     */
    public $timeStart;
    protected $_name = [
        'bucketName'  => 'BucketName',
        'currentPage' => 'CurrentPage',
        'eventName'   => 'EventName',
        'lang'        => 'Lang',
        'md5'         => 'Md5',
        'ossKey'      => 'OssKey',
        'pageSize'    => 'PageSize',
        'riskLevel'   => 'RiskLevel',
        'source'      => 'Source',
        'timeEnd'     => 'TimeEnd',
        'timeStart'   => 'TimeStart',
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
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }
        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListObjectScanEventRequest
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
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }
        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }

        return $model;
    }
}

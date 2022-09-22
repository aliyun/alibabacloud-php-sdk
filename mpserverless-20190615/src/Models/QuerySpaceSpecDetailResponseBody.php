<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class QuerySpaceSpecDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $csCdnTraffic;

    /**
     * @var int
     */
    public $csDownloadCount;

    /**
     * @var int
     */
    public $csStorageSize;

    /**
     * @var int
     */
    public $csUploadCount;

    /**
     * @var int
     */
    public $dbReadCount;

    /**
     * @var int
     */
    public $dbStorageSize;

    /**
     * @var int
     */
    public $dbWriteCount;

    /**
     * @var int
     */
    public $fcCost;

    /**
     * @var int
     */
    public $fcRequestCount;

    /**
     * @var int
     */
    public $fcTxTraffic;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $specCode;

    /**
     * @var string
     */
    public $specDetailText;

    /**
     * @var int
     */
    public $whCdnTraffic;

    /**
     * @var int
     */
    public $whStorageSize;
    protected $_name = [
        'csCdnTraffic'    => 'CsCdnTraffic',
        'csDownloadCount' => 'CsDownloadCount',
        'csStorageSize'   => 'CsStorageSize',
        'csUploadCount'   => 'CsUploadCount',
        'dbReadCount'     => 'DbReadCount',
        'dbStorageSize'   => 'DbStorageSize',
        'dbWriteCount'    => 'DbWriteCount',
        'fcCost'          => 'FcCost',
        'fcRequestCount'  => 'FcRequestCount',
        'fcTxTraffic'     => 'FcTxTraffic',
        'gmtCreate'       => 'GmtCreate',
        'requestId'       => 'RequestId',
        'specCode'        => 'SpecCode',
        'specDetailText'  => 'SpecDetailText',
        'whCdnTraffic'    => 'WhCdnTraffic',
        'whStorageSize'   => 'WhStorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csCdnTraffic) {
            $res['CsCdnTraffic'] = $this->csCdnTraffic;
        }
        if (null !== $this->csDownloadCount) {
            $res['CsDownloadCount'] = $this->csDownloadCount;
        }
        if (null !== $this->csStorageSize) {
            $res['CsStorageSize'] = $this->csStorageSize;
        }
        if (null !== $this->csUploadCount) {
            $res['CsUploadCount'] = $this->csUploadCount;
        }
        if (null !== $this->dbReadCount) {
            $res['DbReadCount'] = $this->dbReadCount;
        }
        if (null !== $this->dbStorageSize) {
            $res['DbStorageSize'] = $this->dbStorageSize;
        }
        if (null !== $this->dbWriteCount) {
            $res['DbWriteCount'] = $this->dbWriteCount;
        }
        if (null !== $this->fcCost) {
            $res['FcCost'] = $this->fcCost;
        }
        if (null !== $this->fcRequestCount) {
            $res['FcRequestCount'] = $this->fcRequestCount;
        }
        if (null !== $this->fcTxTraffic) {
            $res['FcTxTraffic'] = $this->fcTxTraffic;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->specCode) {
            $res['SpecCode'] = $this->specCode;
        }
        if (null !== $this->specDetailText) {
            $res['SpecDetailText'] = $this->specDetailText;
        }
        if (null !== $this->whCdnTraffic) {
            $res['WhCdnTraffic'] = $this->whCdnTraffic;
        }
        if (null !== $this->whStorageSize) {
            $res['WhStorageSize'] = $this->whStorageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpaceSpecDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsCdnTraffic'])) {
            $model->csCdnTraffic = $map['CsCdnTraffic'];
        }
        if (isset($map['CsDownloadCount'])) {
            $model->csDownloadCount = $map['CsDownloadCount'];
        }
        if (isset($map['CsStorageSize'])) {
            $model->csStorageSize = $map['CsStorageSize'];
        }
        if (isset($map['CsUploadCount'])) {
            $model->csUploadCount = $map['CsUploadCount'];
        }
        if (isset($map['DbReadCount'])) {
            $model->dbReadCount = $map['DbReadCount'];
        }
        if (isset($map['DbStorageSize'])) {
            $model->dbStorageSize = $map['DbStorageSize'];
        }
        if (isset($map['DbWriteCount'])) {
            $model->dbWriteCount = $map['DbWriteCount'];
        }
        if (isset($map['FcCost'])) {
            $model->fcCost = $map['FcCost'];
        }
        if (isset($map['FcRequestCount'])) {
            $model->fcRequestCount = $map['FcRequestCount'];
        }
        if (isset($map['FcTxTraffic'])) {
            $model->fcTxTraffic = $map['FcTxTraffic'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpecCode'])) {
            $model->specCode = $map['SpecCode'];
        }
        if (isset($map['SpecDetailText'])) {
            $model->specDetailText = $map['SpecDetailText'];
        }
        if (isset($map['WhCdnTraffic'])) {
            $model->whCdnTraffic = $map['WhCdnTraffic'];
        }
        if (isset($map['WhStorageSize'])) {
            $model->whStorageSize = $map['WhStorageSize'];
        }

        return $model;
    }
}

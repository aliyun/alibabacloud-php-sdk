<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOsVersionResponseBody\osVersion;

use AlibabaCloud\Tea\Model;

class romList extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $baseVersion;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $originalUrl;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $splitNum;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;
    protected $_name = [
        'id'          => 'Id',
        'versionId'   => 'VersionId',
        'baseVersion' => 'BaseVersion',
        'downloadUrl' => 'DownloadUrl',
        'originalUrl' => 'OriginalUrl',
        'md5'         => 'Md5',
        'size'        => 'Size',
        'splitNum'    => 'SplitNum',
        'gmtCreate'   => 'GmtCreate',
        'gmtModify'   => 'GmtModify',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->baseVersion) {
            $res['BaseVersion'] = $this->baseVersion;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->originalUrl) {
            $res['OriginalUrl'] = $this->originalUrl;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->splitNum) {
            $res['SplitNum'] = $this->splitNum;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return romList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['BaseVersion'])) {
            $model->baseVersion = $map['BaseVersion'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['OriginalUrl'])) {
            $model->originalUrl = $map['OriginalUrl'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SplitNum'])) {
            $model->splitNum = $map['SplitNum'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }

        return $model;
    }
}

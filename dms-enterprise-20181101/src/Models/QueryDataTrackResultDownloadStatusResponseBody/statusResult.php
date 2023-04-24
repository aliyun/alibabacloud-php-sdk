<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\QueryDataTrackResultDownloadStatusResponseBody;

use AlibabaCloud\Tea\Model;

class statusResult extends Model
{
    /**
     * @example DOWNLOAD_SUCCESS
     *
     * @var string
     */
    public $downloadStatus;

    /**
     * @example https://idbsaasstore.oss-cn-zhangjiakou.aliyuncs.com/****_REDO_31201_207.zip?Expires=1682239593&OSSAccessKeyId=****&Signature=****
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @example 69
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'downloadStatus' => 'DownloadStatus',
        'downloadUrl'    => 'DownloadUrl',
        'statusDesc'     => 'StatusDesc',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadStatus) {
            $res['DownloadStatus'] = $this->downloadStatus;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadStatus'])) {
            $model->downloadStatus = $map['DownloadStatus'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

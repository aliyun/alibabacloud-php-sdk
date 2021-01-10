<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateSysAppDownloadInfoResponseBody\sysAppDownloadInfo;
use AlibabaCloud\Tea\Model;

class GenerateSysAppDownloadInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sysAppDownloadInfo
     */
    public $sysAppDownloadInfo;
    protected $_name = [
        'requestId'          => 'RequestId',
        'sysAppDownloadInfo' => 'SysAppDownloadInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sysAppDownloadInfo) {
            $res['SysAppDownloadInfo'] = null !== $this->sysAppDownloadInfo ? $this->sysAppDownloadInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateSysAppDownloadInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SysAppDownloadInfo'])) {
            $model->sysAppDownloadInfo = sysAppDownloadInfo::fromMap($map['SysAppDownloadInfo']);
        }

        return $model;
    }
}

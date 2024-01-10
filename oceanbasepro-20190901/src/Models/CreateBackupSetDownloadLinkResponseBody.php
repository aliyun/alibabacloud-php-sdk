<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupSetDownloadLinkResponseBody extends Model
{
    /**
     * @example 10000***67
     *
     * @var int
     */
    public $downloadTaskId;

    /**
     * @example EE205C00-30E4-****-****-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'downloadTaskId' => 'DownloadTaskId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadTaskId) {
            $res['DownloadTaskId'] = $this->downloadTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupSetDownloadLinkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadTaskId'])) {
            $model->downloadTaskId = $map['DownloadTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

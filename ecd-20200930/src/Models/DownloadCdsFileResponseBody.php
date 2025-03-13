<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DownloadCdsFileResponseBody\downloadFileModel;
use AlibabaCloud\Tea\Model;

class DownloadCdsFileResponseBody extends Model
{
    /**
     * @var downloadFileModel
     */
    public $downloadFileModel;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example E3ED9519-DD73-5C86-9C0A-43C9281C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'downloadFileModel' => 'DownloadFileModel',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadFileModel) {
            $res['DownloadFileModel'] = null !== $this->downloadFileModel ? $this->downloadFileModel->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadCdsFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadFileModel'])) {
            $model->downloadFileModel = downloadFileModel::fromMap($map['DownloadFileModel']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

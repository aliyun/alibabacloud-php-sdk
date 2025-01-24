<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DownloadCdsFileResponseBody\downloadFileModel;

class DownloadCdsFileResponseBody extends Model
{
    /**
     * @var downloadFileModel
     */
    public $downloadFileModel;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->downloadFileModel) {
            $this->downloadFileModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadFileModel) {
            $res['DownloadFileModel'] = null !== $this->downloadFileModel ? $this->downloadFileModel->toArray($noStream) : $this->downloadFileModel;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

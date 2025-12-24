<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GenerateFileImportTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileDownloadUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileDownloadUrl' => 'FileDownloadUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileDownloadUrl) {
            $res['FileDownloadUrl'] = $this->fileDownloadUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FileDownloadUrl'])) {
            $model->fileDownloadUrl = $map['FileDownloadUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

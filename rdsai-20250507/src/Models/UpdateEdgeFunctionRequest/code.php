<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateEdgeFunctionRequest;

use AlibabaCloud\Dara\Model;

class code extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossObjectName;

    /**
     * @var string
     */
    public $ossType;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
        'ossBucketName' => 'OssBucketName',
        'ossObjectName' => 'OssObjectName',
        'ossType' => 'OssType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossObjectName) {
            $res['OssObjectName'] = $this->ossObjectName;
        }

        if (null !== $this->ossType) {
            $res['OssType'] = $this->ossType;
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
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['OssObjectName'])) {
            $model->ossObjectName = $map['OssObjectName'];
        }

        if (isset($map['OssType'])) {
            $model->ossType = $map['OssType'];
        }

        return $model;
    }
}

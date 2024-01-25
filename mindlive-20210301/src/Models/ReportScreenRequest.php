<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class ReportScreenRequest extends Model
{
    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossObjectKey;
    protected $_name = [
        'ossBucketName' => 'OssBucketName',
        'ossObjectKey'  => 'OssObjectKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossObjectKey) {
            $res['OssObjectKey'] = $this->ossObjectKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportScreenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssObjectKey'])) {
            $model->ossObjectKey = $map['OssObjectKey'];
        }

        return $model;
    }
}

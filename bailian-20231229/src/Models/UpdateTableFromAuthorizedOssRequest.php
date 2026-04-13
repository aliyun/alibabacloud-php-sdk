<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class UpdateTableFromAuthorizedOssRequest extends Model
{
    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $ossRegionId;

    /**
     * @var string
     */
    public $updateMode;
    protected $_name = [
        'ossBucket' => 'OssBucket',
        'ossKey' => 'OssKey',
        'ossRegionId' => 'OssRegionId',
        'updateMode' => 'UpdateMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->ossRegionId) {
            $res['OssRegionId'] = $this->ossRegionId;
        }

        if (null !== $this->updateMode) {
            $res['UpdateMode'] = $this->updateMode;
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
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['OssRegionId'])) {
            $model->ossRegionId = $map['OssRegionId'];
        }

        if (isset($map['UpdateMode'])) {
            $model->updateMode = $map['UpdateMode'];
        }

        return $model;
    }
}

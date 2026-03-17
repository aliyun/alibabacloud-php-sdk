<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateEdgeFunctionRequest;

use AlibabaCloud\Dara\Model;

class code extends Model
{
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

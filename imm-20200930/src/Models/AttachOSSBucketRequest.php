<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AttachOSSBucketRequest extends Model
{
    /**
     * @example examplebucket
     *
     * @var string
     */
    public $OSSBucket;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'OSSBucket'   => 'OSSBucket',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachOSSBucketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AttachOSSBucketRequest extends Model
{
    /**
     * @description The description of the binding. The description must be 1 to 128 characters in length. By default, no description is applied.
     *
     * @example test-attachment
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the OSS bucket in the same region as the project.
     *
     * This parameter is required.
     * @example examplebucket
     *
     * @var string
     */
    public $OSSBucket;

    /**
     * @description The name of the project. For information about how to create a project, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'description' => 'Description',
        'OSSBucket'   => 'OSSBucket',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}

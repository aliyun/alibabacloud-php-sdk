<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\RemoveStoryFilesRequest;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @description The URI of the Object Storage Service (OSS) bucket where you store the files that you want to delete.
     *
     * Specify the value in the oss://${Bucket}/${Object} format. `${Bucket}` specifies the name of the OSS bucket that resides in the same region as the current project. `${Object}` specifies the complete path to the files that have an extension.
     * @example oss://bucket1/object
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'URI' => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}

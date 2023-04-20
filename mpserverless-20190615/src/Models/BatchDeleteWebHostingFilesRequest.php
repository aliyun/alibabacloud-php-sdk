<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteWebHostingFilesRequest extends Model
{
    /**
     * @example /static/test.png
     *
     * @var string[]
     */
    public $filePaths;

    /**
     * @example 0e16bb12-14af-4635-b24c-5ac1a9a*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'filePaths' => 'FilePaths',
        'spaceId'   => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePaths) {
            $res['FilePaths'] = $this->filePaths;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteWebHostingFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePaths'])) {
            if (!empty($map['FilePaths'])) {
                $model->filePaths = $map['FilePaths'];
            }
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}

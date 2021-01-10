<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteWebHostingFilesRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string[]
     */
    public $filePaths;
    protected $_name = [
        'spaceId'   => 'SpaceId',
        'filePaths' => 'FilePaths',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->filePaths) {
            $res['FilePaths'] = $this->filePaths;
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
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['FilePaths'])) {
            if (!empty($map['FilePaths'])) {
                $model->filePaths = $map['FilePaths'];
            }
        }

        return $model;
    }
}

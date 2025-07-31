<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTaskResponseBody;

use AlibabaCloud\Tea\Model;

class createResult extends Model
{
    /**
     * @example 12113111
     *
     * @var int
     */
    public $fileId;
    protected $_name = [
        'fileId' => 'FileId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        return $model;
    }
}

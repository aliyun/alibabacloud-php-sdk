<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\CreateFileRequest;

use AlibabaCloud\Tea\Model;

class partInfoList extends Model
{
    /**
     * @var string
     */
    public $contentMd5;

    /**
     * @example 1
     *
     * @var int
     */
    public $partNumber;
    protected $_name = [
        'contentMd5' => 'content_md5',
        'partNumber' => 'part_number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentMd5) {
            $res['content_md5'] = $this->contentMd5;
        }
        if (null !== $this->partNumber) {
            $res['part_number'] = $this->partNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return partInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content_md5'])) {
            $model->contentMd5 = $map['content_md5'];
        }
        if (isset($map['part_number'])) {
            $model->partNumber = $map['part_number'];
        }

        return $model;
    }
}

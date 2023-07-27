<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class DeleteMultipleObjectsHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var string
     */
    public $contentMd5;
    protected $_name = [
        'contentMd5' => 'content-md5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->contentMd5) {
            $res['content-md5'] = $this->contentMd5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMultipleObjectsHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['content-md5'])) {
            $model->contentMd5 = $map['content-md5'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class UpdateDocumentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $docId;

    /**
     * @description This parameter is required.
     *
     * @example abc123
     *
     * @var string
     */
    public $libraryId;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $meta;

    /**
     * @example test
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'docId'     => 'docId',
        'libraryId' => 'libraryId',
        'meta'      => 'meta',
        'title'     => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}

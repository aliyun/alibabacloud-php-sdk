<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class UpdateDocumentRequest extends Model
{
    /**
     * @var string
     */
    public $docId;
    /**
     * @var string
     */
    public $libraryId;
    /**
     * @var mixed[]
     */
    public $meta;
    /**
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
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['meta'] = [];
                foreach ($this->meta as $key1 => $value1) {
                    $res['meta'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['meta'])) {
            if (!empty($map['meta'])) {
                $model->meta = [];
                foreach ($map['meta'] as $key1 => $value1) {
                    $model->meta[$key1] = $value1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}

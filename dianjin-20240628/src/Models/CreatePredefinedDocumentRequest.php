<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentRequest\chunks;

class CreatePredefinedDocumentRequest extends Model
{
    /**
     * @var chunks[]
     */
    public $chunks;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'chunks' => 'chunks',
        'libraryId' => 'libraryId',
        'metadata' => 'metadata',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->chunks)) {
            Model::validateArray($this->chunks);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunks) {
            if (\is_array($this->chunks)) {
                $res['chunks'] = [];
                $n1 = 0;
                foreach ($this->chunks as $item1) {
                    $res['chunks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
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
        if (isset($map['chunks'])) {
            if (!empty($map['chunks'])) {
                $model->chunks = [];
                $n1 = 0;
                foreach ($map['chunks'] as $item1) {
                    $model->chunks[$n1] = chunks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentRequest;

use AlibabaCloud\Dara\Model;

class chunks extends Model
{
    /**
     * @var mixed[]
     */
    public $chunkMeta;
    /**
     * @var int
     */
    public $chunkOrder;
    /**
     * @var string
     */
    public $chunkText;
    /**
     * @var string
     */
    public $chunkType;
    protected $_name = [
        'chunkMeta'  => 'chunkMeta',
        'chunkOrder' => 'chunkOrder',
        'chunkText'  => 'chunkText',
        'chunkType'  => 'chunkType',
    ];

    public function validate()
    {
        if (\is_array($this->chunkMeta)) {
            Model::validateArray($this->chunkMeta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkMeta) {
            if (\is_array($this->chunkMeta)) {
                $res['chunkMeta'] = [];
                foreach ($this->chunkMeta as $key1 => $value1) {
                    $res['chunkMeta'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->chunkOrder) {
            $res['chunkOrder'] = $this->chunkOrder;
        }

        if (null !== $this->chunkText) {
            $res['chunkText'] = $this->chunkText;
        }

        if (null !== $this->chunkType) {
            $res['chunkType'] = $this->chunkType;
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
        if (isset($map['chunkMeta'])) {
            if (!empty($map['chunkMeta'])) {
                $model->chunkMeta = [];
                foreach ($map['chunkMeta'] as $key1 => $value1) {
                    $model->chunkMeta[$key1] = $value1;
                }
            }
        }

        if (isset($map['chunkOrder'])) {
            $model->chunkOrder = $map['chunkOrder'];
        }

        if (isset($map['chunkText'])) {
            $model->chunkText = $map['chunkText'];
        }

        if (isset($map['chunkType'])) {
            $model->chunkType = $map['chunkType'];
        }

        return $model;
    }
}

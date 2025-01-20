<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadBookResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $docIds;
    /**
     * @var string[]
     */
    public $existedIds;
    protected $_name = [
        'docIds'     => 'DocIds',
        'existedIds' => 'ExistedIds',
    ];

    public function validate()
    {
        if (\is_array($this->docIds)) {
            Model::validateArray($this->docIds);
        }
        if (\is_array($this->existedIds)) {
            Model::validateArray($this->existedIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docIds) {
            if (\is_array($this->docIds)) {
                $res['DocIds'] = [];
                $n1            = 0;
                foreach ($this->docIds as $item1) {
                    $res['DocIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->existedIds) {
            if (\is_array($this->existedIds)) {
                $res['ExistedIds'] = [];
                $n1                = 0;
                foreach ($this->existedIds as $item1) {
                    $res['ExistedIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['DocIds'])) {
            if (!empty($map['DocIds'])) {
                $model->docIds = [];
                $n1            = 0;
                foreach ($map['DocIds'] as $item1) {
                    $model->docIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExistedIds'])) {
            if (!empty($map['ExistedIds'])) {
                $model->existedIds = [];
                $n1                = 0;
                foreach ($map['ExistedIds'] as $item1) {
                    $model->existedIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class DeleteDocumentRequest extends Model
{
    /**
     * @var string[]
     */
    public $docIds;
    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'docIds'    => 'docIds',
        'libraryId' => 'libraryId',
    ];

    public function validate()
    {
        if (\is_array($this->docIds)) {
            Model::validateArray($this->docIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docIds) {
            if (\is_array($this->docIds)) {
                $res['docIds'] = [];
                $n1            = 0;
                foreach ($this->docIds as $item1) {
                    $res['docIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
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
        if (isset($map['docIds'])) {
            if (!empty($map['docIds'])) {
                $model->docIds = [];
                $n1            = 0;
                foreach ($map['docIds'] as $item1) {
                    $model->docIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        return $model;
    }
}

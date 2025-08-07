<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $deletedDocument;
    protected $_name = [
        'deletedDocument' => 'DeletedDocument',
    ];

    public function validate()
    {
        if (\is_array($this->deletedDocument)) {
            Model::validateArray($this->deletedDocument);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletedDocument) {
            if (\is_array($this->deletedDocument)) {
                $res['DeletedDocument'] = [];
                $n1 = 0;
                foreach ($this->deletedDocument as $item1) {
                    $res['DeletedDocument'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['DeletedDocument'])) {
            if (!empty($map['DeletedDocument'])) {
                $model->deletedDocument = [];
                $n1 = 0;
                foreach ($map['DeletedDocument'] as $item1) {
                    $model->deletedDocument[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

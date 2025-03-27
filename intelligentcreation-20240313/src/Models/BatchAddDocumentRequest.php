<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BatchAddDocumentRequest extends Model
{
    /**
     * @var AddDocumentInfo[]
     */
    public $addDocumentInfos;
    protected $_name = [
        'addDocumentInfos' => 'addDocumentInfos',
    ];

    public function validate()
    {
        if (\is_array($this->addDocumentInfos)) {
            Model::validateArray($this->addDocumentInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addDocumentInfos) {
            if (\is_array($this->addDocumentInfos)) {
                $res['addDocumentInfos'] = [];
                $n1 = 0;
                foreach ($this->addDocumentInfos as $item1) {
                    $res['addDocumentInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['addDocumentInfos'])) {
            if (!empty($map['addDocumentInfos'])) {
                $model->addDocumentInfos = [];
                $n1 = 0;
                foreach ($map['addDocumentInfos'] as $item1) {
                    $model->addDocumentInfos[$n1++] = AddDocumentInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

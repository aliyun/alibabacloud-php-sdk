<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BatchAddDocumentResult extends Model
{
    /**
     * @var AddDocumentResult[]
     */
    public $addDocumentResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addDocumentResults' => 'addDocumentResults',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->addDocumentResults)) {
            Model::validateArray($this->addDocumentResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addDocumentResults) {
            if (\is_array($this->addDocumentResults)) {
                $res['addDocumentResults'] = [];
                $n1 = 0;
                foreach ($this->addDocumentResults as $item1) {
                    $res['addDocumentResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['addDocumentResults'])) {
            if (!empty($map['addDocumentResults'])) {
                $model->addDocumentResults = [];
                $n1 = 0;
                foreach ($map['addDocumentResults'] as $item1) {
                    $model->addDocumentResults[$n1] = AddDocumentResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

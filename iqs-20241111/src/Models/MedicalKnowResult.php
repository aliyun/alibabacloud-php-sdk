<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class MedicalKnowResult extends Model
{
    /**
     * @var MedicalKnowledgeInfo[]
     */
    public $messages;

    /**
     * @var MultimodalQueryContext
     */
    public $queryContext;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UnifiedSearchInformation
     */
    public $searchInformation;
    protected $_name = [
        'messages' => 'messages',
        'queryContext' => 'queryContext',
        'requestId' => 'requestId',
        'searchInformation' => 'searchInformation',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (null !== $this->queryContext) {
            $this->queryContext->validate();
        }
        if (null !== $this->searchInformation) {
            $this->searchInformation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryContext) {
            $res['queryContext'] = null !== $this->queryContext ? $this->queryContext->toArray($noStream) : $this->queryContext;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->searchInformation) {
            $res['searchInformation'] = null !== $this->searchInformation ? $this->searchInformation->toArray($noStream) : $this->searchInformation;
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
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = MedicalKnowledgeInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['queryContext'])) {
            $model->queryContext = MultimodalQueryContext::fromMap($map['queryContext']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['searchInformation'])) {
            $model->searchInformation = UnifiedSearchInformation::fromMap($map['searchInformation']);
        }

        return $model;
    }
}

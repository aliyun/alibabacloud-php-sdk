<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoRequest;

use AlibabaCloud\Dara\Model;

class knowledgeBaseFilters extends Model
{
    /**
     * @var string
     */
    public $collectionName;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $resultLimit;

    /**
     * @var float
     */
    public $scoreThreshold;
    protected $_name = [
        'collectionName' => 'CollectionName',
        'query' => 'Query',
        'resultLimit' => 'ResultLimit',
        'scoreThreshold' => 'ScoreThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectionName) {
            $res['CollectionName'] = $this->collectionName;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->resultLimit) {
            $res['ResultLimit'] = $this->resultLimit;
        }

        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
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
        if (isset($map['CollectionName'])) {
            $model->collectionName = $map['CollectionName'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['ResultLimit'])) {
            $model->resultLimit = $map['ResultLimit'];
        }

        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }

        return $model;
    }
}

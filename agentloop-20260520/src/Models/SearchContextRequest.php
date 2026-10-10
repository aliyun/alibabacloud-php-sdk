<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\SearchContextRequest\scope;

class SearchContextRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $filter;

    /**
     * @var bool
     */
    public $formatted;

    /**
     * @var bool
     */
    public $includeInactive;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $retrievalOption;

    /**
     * @var scope
     */
    public $scope;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'filter' => 'filter',
        'formatted' => 'formatted',
        'includeInactive' => 'includeInactive',
        'limit' => 'limit',
        'query' => 'query',
        'retrievalOption' => 'retrievalOption',
        'scope' => 'scope',
        'threshold' => 'threshold',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['filter'] = [];
                foreach ($this->filter as $key1 => $value1) {
                    $res['filter'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->formatted) {
            $res['formatted'] = $this->formatted;
        }

        if (null !== $this->includeInactive) {
            $res['includeInactive'] = $this->includeInactive;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->retrievalOption) {
            $res['retrievalOption'] = $this->retrievalOption;
        }

        if (null !== $this->scope) {
            $res['scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
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
        if (isset($map['filter'])) {
            if (!empty($map['filter'])) {
                $model->filter = [];
                foreach ($map['filter'] as $key1 => $value1) {
                    $model->filter[$key1] = $value1;
                }
            }
        }

        if (isset($map['formatted'])) {
            $model->formatted = $map['formatted'];
        }

        if (isset($map['includeInactive'])) {
            $model->includeInactive = $map['includeInactive'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['retrievalOption'])) {
            $model->retrievalOption = $map['retrievalOption'];
        }

        if (isset($map['scope'])) {
            $model->scope = scope::fromMap($map['scope']);
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        return $model;
    }
}

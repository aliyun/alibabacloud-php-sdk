<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetQueryAnalysisRequest\functions;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetQueryAnalysisRequest\history;

class GetQueryAnalysisRequest extends Model
{
    /**
     * @var functions[]
     */
    public $functions;

    /**
     * @var history[]
     */
    public $history;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'functions' => 'functions',
        'history' => 'history',
        'query' => 'query',
    ];

    public function validate()
    {
        if (\is_array($this->functions)) {
            Model::validateArray($this->functions);
        }
        if (\is_array($this->history)) {
            Model::validateArray($this->history);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functions) {
            if (\is_array($this->functions)) {
                $res['functions'] = [];
                $n1 = 0;
                foreach ($this->functions as $item1) {
                    $res['functions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->history) {
            if (\is_array($this->history)) {
                $res['history'] = [];
                $n1 = 0;
                foreach ($this->history as $item1) {
                    $res['history'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
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
        if (isset($map['functions'])) {
            if (!empty($map['functions'])) {
                $model->functions = [];
                $n1 = 0;
                foreach ($map['functions'] as $item1) {
                    $model->functions[$n1++] = functions::fromMap($item1);
                }
            }
        }

        if (isset($map['history'])) {
            if (!empty($map['history'])) {
                $model->history = [];
                $n1 = 0;
                foreach ($map['history'] as $item1) {
                    $model->history[$n1++] = history::fromMap($item1);
                }
            }
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}

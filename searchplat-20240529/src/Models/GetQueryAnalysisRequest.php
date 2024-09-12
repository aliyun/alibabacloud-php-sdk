<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetQueryAnalysisRequest\functions;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetQueryAnalysisRequest\history;
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'functions' => 'functions',
        'history'   => 'history',
        'query'     => 'query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functions) {
            $res['functions'] = [];
            if (null !== $this->functions && \is_array($this->functions)) {
                $n = 0;
                foreach ($this->functions as $item) {
                    $res['functions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->history) {
            $res['history'] = [];
            if (null !== $this->history && \is_array($this->history)) {
                $n = 0;
                foreach ($this->history as $item) {
                    $res['history'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueryAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['functions'])) {
            if (!empty($map['functions'])) {
                $model->functions = [];
                $n                = 0;
                foreach ($map['functions'] as $item) {
                    $model->functions[$n++] = null !== $item ? functions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['history'])) {
            if (!empty($map['history'])) {
                $model->history = [];
                $n              = 0;
                foreach ($map['history'] as $item) {
                    $model->history[$n++] = null !== $item ? history::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}

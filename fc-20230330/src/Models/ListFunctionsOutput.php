<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionsOutput extends Model
{
    /**
     * @var Function_[]
     */
    public $functions;

    /**
     * @example next_function_name
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'functions' => 'functions',
        'nextToken' => 'nextToken',
    ];

    public function validate() {}

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
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['functions'])) {
            if (!empty($map['functions'])) {
                $model->functions = [];
                $n = 0;
                foreach ($map['functions'] as $item) {
                    $model->functions[$n++] = null !== $item ? Function_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}

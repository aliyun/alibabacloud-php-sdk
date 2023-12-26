<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListFiltersResponseBody\filters;
use AlibabaCloud\Tea\Model;

class ListFiltersResponseBody extends Model
{
    /**
     * @var string
     */
    public $defaultFilterName;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @example AA39FB9C-CB74-5E73-8DFE-3A2B096F0759
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defaultFilterName' => 'DefaultFilterName',
        'filters'           => 'Filters',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultFilterName) {
            $res['DefaultFilterName'] = $this->defaultFilterName;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFiltersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultFilterName'])) {
            $model->defaultFilterName = $map['DefaultFilterName'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

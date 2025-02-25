<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListFiltersResponseBody\filters;

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
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultFilterName) {
            $res['DefaultFilterName'] = $this->defaultFilterName;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1             = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DefaultFilterName'])) {
            $model->defaultFilterName = $map['DefaultFilterName'];
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1             = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1++] = filters::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

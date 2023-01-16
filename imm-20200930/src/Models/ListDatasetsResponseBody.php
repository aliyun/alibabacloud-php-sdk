<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListDatasetsResponseBody extends Model
{
    /**
     * @var Dataset[]
     */
    public $datasets;

    /**
     * @example 12345678:immtest:dataset002
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example FEEDE356-C928-4A36-951A-6EB5A592****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasets'  => 'Datasets',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasets) {
            $res['Datasets'] = [];
            if (null !== $this->datasets && \is_array($this->datasets)) {
                $n = 0;
                foreach ($this->datasets as $item) {
                    $res['Datasets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatasetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datasets'])) {
            if (!empty($map['Datasets'])) {
                $model->datasets = [];
                $n               = 0;
                foreach ($map['Datasets'] as $item) {
                    $model->datasets[$n++] = null !== $item ? Dataset::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

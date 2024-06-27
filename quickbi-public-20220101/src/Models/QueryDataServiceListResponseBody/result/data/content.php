<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content\filter;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content\returnFields;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 56f9f34a-bdba-496a-91a3-a18b1ff73a80
     *
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $cubeName;

    /**
     * @example true
     *
     * @var bool
     */
    public $detail;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var returnFields[]
     */
    public $returnFields;
    protected $_name = [
        'cubeId'       => 'CubeId',
        'cubeName'     => 'CubeName',
        'detail'       => 'Detail',
        'filter'       => 'Filter',
        'returnFields' => 'ReturnFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }
        if (null !== $this->cubeName) {
            $res['CubeName'] = $this->cubeName;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toMap() : null;
        }
        if (null !== $this->returnFields) {
            $res['ReturnFields'] = [];
            if (null !== $this->returnFields && \is_array($this->returnFields)) {
                $n = 0;
                foreach ($this->returnFields as $item) {
                    $res['ReturnFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['CubeName'])) {
            $model->cubeName = $map['CubeName'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }
        if (isset($map['ReturnFields'])) {
            if (!empty($map['ReturnFields'])) {
                $model->returnFields = [];
                $n                   = 0;
                foreach ($map['ReturnFields'] as $item) {
                    $model->returnFields[$n++] = null !== $item ? returnFields::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

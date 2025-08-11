<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content\filter;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content\returnFields;

class content extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $cubeName;

    /**
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
        'cubeId' => 'CubeId',
        'cubeName' => 'CubeName',
        'detail' => 'Detail',
        'filter' => 'Filter',
        'returnFields' => 'ReturnFields',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (\is_array($this->returnFields)) {
            Model::validateArray($this->returnFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->returnFields) {
            if (\is_array($this->returnFields)) {
                $res['ReturnFields'] = [];
                $n1 = 0;
                foreach ($this->returnFields as $item1) {
                    $res['ReturnFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['ReturnFields'] as $item1) {
                    $model->returnFields[$n1] = returnFields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

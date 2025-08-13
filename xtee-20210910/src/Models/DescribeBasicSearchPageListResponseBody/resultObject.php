<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeBasicSearchPageListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeBasicSearchPageListResponseBody\resultObject\header;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var mixed[][]
     */
    public $data;

    /**
     * @var header[]
     */
    public $header;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalItem;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'currentPage' => 'currentPage',
        'data' => 'data',
        'header' => 'header',
        'pageSize' => 'pageSize',
        'totalItem' => 'totalItem',
        'totalPage' => 'totalPage',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->header)) {
            Model::validateArray($this->header);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    if (\is_array($item1)) {
                        $res['data'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['data'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->header) {
            if (\is_array($this->header)) {
                $res['header'] = [];
                $n1 = 0;
                foreach ($this->header as $item1) {
                    $res['header'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->totalItem) {
            $res['totalItem'] = $this->totalItem;
        }

        if (null !== $this->totalPage) {
            $res['totalPage'] = $this->totalPage;
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
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    if (!empty($item1)) {
                        $model->data[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->data[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['header'])) {
            if (!empty($map['header'])) {
                $model->header = [];
                $n1 = 0;
                foreach ($map['header'] as $item1) {
                    $model->header[$n1] = header::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['totalItem'])) {
            $model->totalItem = $map['totalItem'];
        }

        if (isset($map['totalPage'])) {
            $model->totalPage = $map['totalPage'];
        }

        return $model;
    }
}

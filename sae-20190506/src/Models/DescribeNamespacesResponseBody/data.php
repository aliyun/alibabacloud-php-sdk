<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespacesResponseBody\data\namespaces;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var namespaces[]
     */
    public $namespaces;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'namespaces' => 'Namespaces',
        'pageSize' => 'PageSize',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        if (\is_array($this->namespaces)) {
            Model::validateArray($this->namespaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->namespaces) {
            if (\is_array($this->namespaces)) {
                $res['Namespaces'] = [];
                $n1 = 0;
                foreach ($this->namespaces as $item1) {
                    $res['Namespaces'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n1 = 0;
                foreach ($map['Namespaces'] as $item1) {
                    $model->namespaces[$n1++] = namespaces::fromMap($item1);
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}

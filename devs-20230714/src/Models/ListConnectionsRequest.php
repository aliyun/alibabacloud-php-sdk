<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ListConnectionsRequest extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $labelSelector;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'keyword' => 'keyword',
        'labelSelector' => 'labelSelector',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        if (\is_array($this->labelSelector)) {
            Model::validateArray($this->labelSelector);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->labelSelector) {
            if (\is_array($this->labelSelector)) {
                $res['labelSelector'] = [];
                $n1 = 0;
                foreach ($this->labelSelector as $item1) {
                    $res['labelSelector'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['labelSelector'])) {
            if (!empty($map['labelSelector'])) {
                $model->labelSelector = [];
                $n1 = 0;
                foreach ($map['labelSelector'] as $item1) {
                    $model->labelSelector[$n1++] = $item1;
                }
            }
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}

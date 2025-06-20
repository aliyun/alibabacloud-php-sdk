<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryRegionAzResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryRegionAzResponseBody\data\dataInfo;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryRegionAzResponseBody\data\pagination;

class data extends Model
{
    /**
     * @var dataInfo[]
     */
    public $dataInfo;

    /**
     * @var pagination
     */
    public $pagination;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'dataInfo' => 'DataInfo',
        'pagination' => 'Pagination',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->dataInfo)) {
            Model::validateArray($this->dataInfo);
        }
        if (null !== $this->pagination) {
            $this->pagination->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInfo) {
            if (\is_array($this->dataInfo)) {
                $res['DataInfo'] = [];
                $n1 = 0;
                foreach ($this->dataInfo as $item1) {
                    $res['DataInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toArray($noStream) : $this->pagination;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['DataInfo'])) {
            if (!empty($map['DataInfo'])) {
                $model->dataInfo = [];
                $n1 = 0;
                foreach ($map['DataInfo'] as $item1) {
                    $model->dataInfo[$n1] = dataInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

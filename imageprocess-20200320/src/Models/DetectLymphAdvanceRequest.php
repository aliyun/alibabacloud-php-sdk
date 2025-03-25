<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphAdvanceRequest\URLList;

class DetectLymphAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var URLList[]
     */
    public $URLList;
    protected $_name = [
        'dataSourceType' => 'DataSourceType',
        'URLList' => 'URLList',
    ];

    public function validate()
    {
        if (\is_array($this->URLList)) {
            Model::validateArray($this->URLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->URLList) {
            if (\is_array($this->URLList)) {
                $res['URLList'] = [];
                $n1 = 0;
                foreach ($this->URLList as $item1) {
                    $res['URLList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n1 = 0;
                foreach ($map['URLList'] as $item1) {
                    $model->URLList[$n1++] = URLList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

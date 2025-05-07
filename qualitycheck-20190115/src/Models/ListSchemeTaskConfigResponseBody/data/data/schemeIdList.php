<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data;

use AlibabaCloud\Dara\Model;

class schemeIdList extends Model
{
    /**
     * @var int[]
     */
    public $schemeIdList;
    protected $_name = [
        'schemeIdList' => 'SchemeIdList',
    ];

    public function validate()
    {
        if (\is_array($this->schemeIdList)) {
            Model::validateArray($this->schemeIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schemeIdList) {
            if (\is_array($this->schemeIdList)) {
                $res['SchemeIdList'] = [];
                $n1 = 0;
                foreach ($this->schemeIdList as $item1) {
                    $res['SchemeIdList'][$n1++] = $item1;
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
        if (isset($map['SchemeIdList'])) {
            if (!empty($map['SchemeIdList'])) {
                $model->schemeIdList = [];
                $n1 = 0;
                foreach ($map['SchemeIdList'] as $item1) {
                    $model->schemeIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

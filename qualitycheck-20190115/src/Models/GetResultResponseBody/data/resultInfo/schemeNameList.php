<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\Dara\Model;

class schemeNameList extends Model
{
    /**
     * @var string[]
     */
    public $schemeNameList;
    protected $_name = [
        'schemeNameList' => 'SchemeNameList',
    ];

    public function validate()
    {
        if (\is_array($this->schemeNameList)) {
            Model::validateArray($this->schemeNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schemeNameList) {
            if (\is_array($this->schemeNameList)) {
                $res['SchemeNameList'] = [];
                $n1 = 0;
                foreach ($this->schemeNameList as $item1) {
                    $res['SchemeNameList'][$n1] = $item1;
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
        if (isset($map['SchemeNameList'])) {
            if (!empty($map['SchemeNameList'])) {
                $model->schemeNameList = [];
                $n1 = 0;
                foreach ($map['SchemeNameList'] as $item1) {
                    $model->schemeNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

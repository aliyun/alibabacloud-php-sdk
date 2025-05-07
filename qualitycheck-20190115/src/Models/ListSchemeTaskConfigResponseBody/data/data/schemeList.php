<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\schemeList\schemeList;

class schemeList extends Model
{
    /**
     * @var schemeList[]
     */
    public $schemeList;
    protected $_name = [
        'schemeList' => 'SchemeList',
    ];

    public function validate()
    {
        if (\is_array($this->schemeList)) {
            Model::validateArray($this->schemeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schemeList) {
            if (\is_array($this->schemeList)) {
                $res['SchemeList'] = [];
                $n1 = 0;
                foreach ($this->schemeList as $item1) {
                    $res['SchemeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SchemeList'])) {
            if (!empty($map['SchemeList'])) {
                $model->schemeList = [];
                $n1 = 0;
                foreach ($map['SchemeList'] as $item1) {
                    $model->schemeList[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param;

use AlibabaCloud\Dara\Model;

class keywords extends Model
{
    /**
     * @var string[]
     */
    public $keyword;
    protected $_name = [
        'keyword' => 'Keyword',
    ];

    public function validate()
    {
        if (\is_array($this->keyword)) {
            Model::validateArray($this->keyword);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            if (\is_array($this->keyword)) {
                $res['Keyword'] = [];
                $n1 = 0;
                foreach ($this->keyword as $item1) {
                    $res['Keyword'][$n1++] = $item1;
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
        if (isset($map['Keyword'])) {
            if (!empty($map['Keyword'])) {
                $model->keyword = [];
                $n1 = 0;
                foreach ($map['Keyword'] as $item1) {
                    $model->keyword[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

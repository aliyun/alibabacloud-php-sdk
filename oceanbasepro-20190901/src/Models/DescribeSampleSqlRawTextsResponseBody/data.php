<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSampleSqlRawTextsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $sqlText;
    protected $_name = [
        'sqlText' => 'SqlText',
    ];

    public function validate()
    {
        if (\is_array($this->sqlText)) {
            Model::validateArray($this->sqlText);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sqlText) {
            if (\is_array($this->sqlText)) {
                $res['SqlText'] = [];
                $n1 = 0;
                foreach ($this->sqlText as $item1) {
                    $res['SqlText'][$n1++] = $item1;
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
        if (isset($map['SqlText'])) {
            if (!empty($map['SqlText'])) {
                $model->sqlText = [];
                $n1 = 0;
                foreach ($map['SqlText'] as $item1) {
                    $model->sqlText[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

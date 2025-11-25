<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLinesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLinesResponseBody\customLines\customLine;

class customLines extends Model
{
    /**
     * @var customLine[]
     */
    public $customLine;
    protected $_name = [
        'customLine' => 'CustomLine',
    ];

    public function validate()
    {
        if (\is_array($this->customLine)) {
            Model::validateArray($this->customLine);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customLine) {
            if (\is_array($this->customLine)) {
                $res['CustomLine'] = [];
                $n1 = 0;
                foreach ($this->customLine as $item1) {
                    $res['CustomLine'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomLine'])) {
            if (!empty($map['CustomLine'])) {
                $model->customLine = [];
                $n1 = 0;
                foreach ($map['CustomLine'] as $item1) {
                    $model->customLine[$n1] = customLine::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

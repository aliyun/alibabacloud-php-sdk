<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DescribeWebStaticsQueryOutput extends Model
{
    /**
     * @var int
     */
    public $length;

    /**
     * @var WebStaticsInfo[]
     */
    public $webStatics;
    protected $_name = [
        'length' => 'Length',
        'webStatics' => 'WebStatics',
    ];

    public function validate()
    {
        if (\is_array($this->webStatics)) {
            Model::validateArray($this->webStatics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->webStatics) {
            if (\is_array($this->webStatics)) {
                $res['WebStatics'] = [];
                $n1 = 0;
                foreach ($this->webStatics as $item1) {
                    $res['WebStatics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['WebStatics'])) {
            if (!empty($map['WebStatics'])) {
                $model->webStatics = [];
                $n1 = 0;
                foreach ($map['WebStatics'] as $item1) {
                    $model->webStatics[$n1++] = WebStaticsInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

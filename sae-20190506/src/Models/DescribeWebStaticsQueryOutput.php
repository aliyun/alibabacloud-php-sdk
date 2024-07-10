<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'length'     => 'Length',
        'webStatics' => 'WebStatics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->webStatics) {
            $res['WebStatics'] = [];
            if (null !== $this->webStatics && \is_array($this->webStatics)) {
                $n = 0;
                foreach ($this->webStatics as $item) {
                    $res['WebStatics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebStaticsQueryOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['WebStatics'])) {
            if (!empty($map['WebStatics'])) {
                $model->webStatics = [];
                $n                 = 0;
                foreach ($map['WebStatics'] as $item) {
                    $model->webStatics[$n++] = null !== $item ? WebStaticsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

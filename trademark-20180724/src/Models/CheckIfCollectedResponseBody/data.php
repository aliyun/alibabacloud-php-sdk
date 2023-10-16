<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\CheckIfCollectedResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckIfCollectedResponseBody\data\trademark;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var trademark[]
     */
    public $trademark;
    protected $_name = [
        'trademark' => 'Trademark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trademark) {
            $res['Trademark'] = [];
            if (null !== $this->trademark && \is_array($this->trademark)) {
                $n = 0;
                foreach ($this->trademark as $item) {
                    $res['Trademark'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Trademark'])) {
            if (!empty($map['Trademark'])) {
                $model->trademark = [];
                $n                = 0;
                foreach ($map['Trademark'] as $item) {
                    $model->trademark[$n++] = null !== $item ? trademark::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

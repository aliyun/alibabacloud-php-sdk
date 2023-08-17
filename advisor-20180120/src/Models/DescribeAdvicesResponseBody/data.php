<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesResponseBody;

use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesResponseBody\data\advice;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var advice[]
     */
    public $advice;
    protected $_name = [
        'advice' => 'Advice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = [];
            if (null !== $this->advice && \is_array($this->advice)) {
                $n = 0;
                foreach ($this->advice as $item) {
                    $res['Advice'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Advice'])) {
            if (!empty($map['Advice'])) {
                $model->advice = [];
                $n             = 0;
                foreach ($map['Advice'] as $item) {
                    $model->advice[$n++] = null !== $item ? advice::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

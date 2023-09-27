<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiQpsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiQpsResponseBody\fails\fail;
use AlibabaCloud\Tea\Model;

class fails extends Model
{
    /**
     * @var fail[]
     */
    public $fail;
    protected $_name = [
        'fail' => 'Fail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fail) {
            $res['Fail'] = [];
            if (null !== $this->fail && \is_array($this->fail)) {
                $n = 0;
                foreach ($this->fail as $item) {
                    $res['Fail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fail'])) {
            if (!empty($map['Fail'])) {
                $model->fail = [];
                $n           = 0;
                foreach ($map['Fail'] as $item) {
                    $model->fail[$n++] = null !== $item ? fail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

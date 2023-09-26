<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiQpsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiQpsResponseBody\successes\success;
use AlibabaCloud\Tea\Model;

class successes extends Model
{
    /**
     * @var success[]
     */
    public $success;
    protected $_name = [
        'success' => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = [];
            if (null !== $this->success && \is_array($this->success)) {
                $n = 0;
                foreach ($this->success as $item) {
                    $res['Success'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            if (!empty($map['Success'])) {
                $model->success = [];
                $n              = 0;
                foreach ($map['Success'] as $item) {
                    $model->success[$n++] = null !== $item ? success::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

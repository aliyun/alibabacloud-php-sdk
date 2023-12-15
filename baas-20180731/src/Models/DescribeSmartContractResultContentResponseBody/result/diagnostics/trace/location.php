<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody\result\diagnostics\trace;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody\result\diagnostics\trace\location\range;
use AlibabaCloud\Tea\Model;

class location extends Model
{
    /**
     * @var range[]
     */
    public $range;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'range' => 'Range',
        'uri'   => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->range) {
            $res['Range'] = [];
            if (null !== $this->range && \is_array($this->range)) {
                $n = 0;
                foreach ($this->range as $item) {
                    $res['Range'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return location
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Range'])) {
            if (!empty($map['Range'])) {
                $model->range = [];
                $n            = 0;
                foreach ($map['Range'] as $item) {
                    $model->range[$n++] = null !== $item ? range::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}

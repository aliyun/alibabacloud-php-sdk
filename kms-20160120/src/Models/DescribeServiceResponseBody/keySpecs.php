<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody\keySpecs\keySpec;
use AlibabaCloud\Tea\Model;

class keySpecs extends Model
{
    /**
     * @var keySpec[]
     */
    public $keySpec;
    protected $_name = [
        'keySpec' => 'KeySpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keySpec) {
            $res['KeySpec'] = [];
            if (null !== $this->keySpec && \is_array($this->keySpec)) {
                $n = 0;
                foreach ($this->keySpec as $item) {
                    $res['KeySpec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keySpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeySpec'])) {
            if (!empty($map['KeySpec'])) {
                $model->keySpec = [];
                $n              = 0;
                foreach ($map['KeySpec'] as $item) {
                    $model->keySpec[$n++] = null !== $item ? keySpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

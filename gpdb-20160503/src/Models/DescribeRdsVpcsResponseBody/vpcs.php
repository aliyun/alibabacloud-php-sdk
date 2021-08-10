<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponseBody\vpcs\vpc;
use AlibabaCloud\Tea\Model;

class vpcs extends Model
{
    /**
     * @var vpc[]
     */
    public $vpc;
    protected $_name = [
        'vpc' => 'Vpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpc) {
            $res['Vpc'] = [];
            if (null !== $this->vpc && \is_array($this->vpc)) {
                $n = 0;
                foreach ($this->vpc as $item) {
                    $res['Vpc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Vpc'])) {
            if (!empty($map['Vpc'])) {
                $model->vpc = [];
                $n          = 0;
                foreach ($map['Vpc'] as $item) {
                    $model->vpc[$n++] = null !== $item ? vpc::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\parameters\parameters[]
     */
    public $parameters;
    protected $_name = [
        'parameters' => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? \AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\parameters\parameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources\supportResource;
use AlibabaCloud\Tea\Model;

class supportResources extends Model
{
    /**
     * @var supportResource[]
     */
    public $supportResource;
    protected $_name = [
        'supportResource' => 'SupportResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportResource) {
            $res['SupportResource'] = [];
            if (null !== $this->supportResource && \is_array($this->supportResource)) {
                $n = 0;
                foreach ($this->supportResource as $item) {
                    $res['SupportResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportResource'])) {
            if (!empty($map['SupportResource'])) {
                $model->supportResource = [];
                $n                      = 0;
                foreach ($map['SupportResource'] as $item) {
                    $model->supportResource[$n++] = null !== $item ? supportResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

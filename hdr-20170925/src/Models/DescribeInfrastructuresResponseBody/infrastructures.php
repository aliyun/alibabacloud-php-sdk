<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeInfrastructuresResponseBody;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeInfrastructuresResponseBody\infrastructures\infrastructure;
use AlibabaCloud\Tea\Model;

class infrastructures extends Model
{
    /**
     * @var infrastructure[]
     */
    public $infrastructure;
    protected $_name = [
        'infrastructure' => 'infrastructure',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infrastructure) {
            $res['infrastructure'] = [];
            if (null !== $this->infrastructure && \is_array($this->infrastructure)) {
                $n = 0;
                foreach ($this->infrastructure as $item) {
                    $res['infrastructure'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return infrastructures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['infrastructure'])) {
            if (!empty($map['infrastructure'])) {
                $model->infrastructure = [];
                $n                     = 0;
                foreach ($map['infrastructure'] as $item) {
                    $model->infrastructure[$n++] = null !== $item ? infrastructure::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

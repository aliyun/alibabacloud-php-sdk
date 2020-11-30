<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config\cc\sblack;
use AlibabaCloud\Tea\Model;

class cc extends Model
{
    /**
     * @var sblack[]
     */
    public $sblack;
    protected $_name = [
        'sblack' => 'Sblack',
    ];

    public function validate()
    {
        Model::validateRequired('sblack', $this->sblack, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sblack) {
            $res['Sblack'] = [];
            if (null !== $this->sblack && \is_array($this->sblack)) {
                $n = 0;
                foreach ($this->sblack as $item) {
                    $res['Sblack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sblack'])) {
            if (!empty($map['Sblack'])) {
                $model->sblack = [];
                $n             = 0;
                foreach ($map['Sblack'] as $item) {
                    $model->sblack[$n++] = null !== $item ? sblack::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

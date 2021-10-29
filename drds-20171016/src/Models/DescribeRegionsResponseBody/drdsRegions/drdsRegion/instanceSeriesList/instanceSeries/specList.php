<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody\drdsRegions\drdsRegion\instanceSeriesList\instanceSeries;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody\drdsRegions\drdsRegion\instanceSeriesList\instanceSeries\specList\spec;
use AlibabaCloud\Tea\Model;

class specList extends Model
{
    /**
     * @var spec[]
     */
    public $spec;
    protected $_name = [
        'spec' => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spec) {
            $res['Spec'] = [];
            if (null !== $this->spec && \is_array($this->spec)) {
                $n = 0;
                foreach ($this->spec as $item) {
                    $res['Spec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Spec'])) {
            if (!empty($map['Spec'])) {
                $model->spec = [];
                $n           = 0;
                foreach ($map['Spec'] as $item) {
                    $model->spec[$n++] = null !== $item ? spec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCloudMetricProfilingsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCloudMetricProfilingsResponseBody\profilings\profilingInfo;
use AlibabaCloud\Tea\Model;

class profilings extends Model
{
    /**
     * @var profilingInfo[]
     */
    public $profilingInfo;
    protected $_name = [
        'profilingInfo' => 'ProfilingInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->profilingInfo) {
            $res['ProfilingInfo'] = [];
            if (null !== $this->profilingInfo && \is_array($this->profilingInfo)) {
                $n = 0;
                foreach ($this->profilingInfo as $item) {
                    $res['ProfilingInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return profilings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProfilingInfo'])) {
            if (!empty($map['ProfilingInfo'])) {
                $model->profilingInfo = [];
                $n                    = 0;
                foreach ($map['ProfilingInfo'] as $item) {
                    $model->profilingInfo[$n++] = null !== $item ? profilingInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

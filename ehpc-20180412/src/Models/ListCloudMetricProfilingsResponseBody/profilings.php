<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCloudMetricProfilingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCloudMetricProfilingsResponseBody\profilings\profilingInfo;

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
        if (\is_array($this->profilingInfo)) {
            Model::validateArray($this->profilingInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->profilingInfo) {
            if (\is_array($this->profilingInfo)) {
                $res['ProfilingInfo'] = [];
                $n1 = 0;
                foreach ($this->profilingInfo as $item1) {
                    $res['ProfilingInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProfilingInfo'])) {
            if (!empty($map['ProfilingInfo'])) {
                $model->profilingInfo = [];
                $n1 = 0;
                foreach ($map['ProfilingInfo'] as $item1) {
                    $model->profilingInfo[$n1++] = profilingInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

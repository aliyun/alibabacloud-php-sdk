<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnoseResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnoseResponseBody\diagnoseInstances\diagnoseInstance;
use AlibabaCloud\Tea\Model;

class diagnoseInstances extends Model
{
    /**
     * @var diagnoseInstance[]
     */
    public $diagnoseInstance;
    protected $_name = [
        'diagnoseInstance' => 'DiagnoseInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnoseInstance) {
            $res['DiagnoseInstance'] = [];
            if (null !== $this->diagnoseInstance && \is_array($this->diagnoseInstance)) {
                $n = 0;
                foreach ($this->diagnoseInstance as $item) {
                    $res['DiagnoseInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseInstance'])) {
            if (!empty($map['DiagnoseInstance'])) {
                $model->diagnoseInstance = [];
                $n                       = 0;
                foreach ($map['DiagnoseInstance'] as $item) {
                    $model->diagnoseInstance[$n++] = null !== $item ? diagnoseInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

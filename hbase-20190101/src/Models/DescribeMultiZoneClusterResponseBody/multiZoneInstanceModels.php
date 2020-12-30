<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterResponseBody\multiZoneInstanceModels\multiZoneInstanceModel;
use AlibabaCloud\Tea\Model;

class multiZoneInstanceModels extends Model
{
    /**
     * @var multiZoneInstanceModel[]
     */
    public $multiZoneInstanceModel;
    protected $_name = [
        'multiZoneInstanceModel' => 'MultiZoneInstanceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multiZoneInstanceModel) {
            $res['MultiZoneInstanceModel'] = [];
            if (null !== $this->multiZoneInstanceModel && \is_array($this->multiZoneInstanceModel)) {
                $n = 0;
                foreach ($this->multiZoneInstanceModel as $item) {
                    $res['MultiZoneInstanceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiZoneInstanceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultiZoneInstanceModel'])) {
            if (!empty($map['MultiZoneInstanceModel'])) {
                $model->multiZoneInstanceModel = [];
                $n                             = 0;
                foreach ($map['MultiZoneInstanceModel'] as $item) {
                    $model->multiZoneInstanceModel[$n++] = null !== $item ? multiZoneInstanceModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

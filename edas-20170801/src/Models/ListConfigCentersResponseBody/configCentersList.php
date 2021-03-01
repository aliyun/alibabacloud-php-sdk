<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConfigCentersResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListConfigCentersResponseBody\configCentersList\listConfigCenters;
use AlibabaCloud\Tea\Model;

class configCentersList extends Model
{
    /**
     * @var listConfigCenters[]
     */
    public $listConfigCenters;
    protected $_name = [
        'listConfigCenters' => 'ListConfigCenters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listConfigCenters) {
            $res['ListConfigCenters'] = [];
            if (null !== $this->listConfigCenters && \is_array($this->listConfigCenters)) {
                $n = 0;
                foreach ($this->listConfigCenters as $item) {
                    $res['ListConfigCenters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configCentersList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListConfigCenters'])) {
            if (!empty($map['ListConfigCenters'])) {
                $model->listConfigCenters = [];
                $n                        = 0;
                foreach ($map['ListConfigCenters'] as $item) {
                    $model->listConfigCenters[$n++] = null !== $item ? listConfigCenters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

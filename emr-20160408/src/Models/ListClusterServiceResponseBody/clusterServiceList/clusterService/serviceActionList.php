<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponseBody\clusterServiceList\clusterService;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponseBody\clusterServiceList\clusterService\serviceActionList\serviceAction;
use AlibabaCloud\Tea\Model;

class serviceActionList extends Model
{
    /**
     * @var serviceAction[]
     */
    public $serviceAction;
    protected $_name = [
        'serviceAction' => 'ServiceAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceAction) {
            $res['ServiceAction'] = [];
            if (null !== $this->serviceAction && \is_array($this->serviceAction)) {
                $n = 0;
                foreach ($this->serviceAction as $item) {
                    $res['ServiceAction'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceActionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceAction'])) {
            if (!empty($map['ServiceAction'])) {
                $model->serviceAction = [];
                $n                    = 0;
                foreach ($map['ServiceAction'] as $item) {
                    $model->serviceAction[$n++] = null !== $item ? serviceAction::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

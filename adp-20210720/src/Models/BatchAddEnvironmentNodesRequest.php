<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class BatchAddEnvironmentNodesRequest extends Model
{
    /**
     * @var InstanceInfo[]
     */
    public $instanceList;

    /**
     * @example true覆盖
     *
     * @var bool
     */
    public $overwrite;
    protected $_name = [
        'instanceList' => 'instanceList',
        'overwrite'    => 'overwrite',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceList) {
            $res['instanceList'] = [];
            if (null !== $this->instanceList && \is_array($this->instanceList)) {
                $n = 0;
                foreach ($this->instanceList as $item) {
                    $res['instanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->overwrite) {
            $res['overwrite'] = $this->overwrite;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddEnvironmentNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceList'])) {
            if (!empty($map['instanceList'])) {
                $model->instanceList = [];
                $n                   = 0;
                foreach ($map['instanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? InstanceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['overwrite'])) {
            $model->overwrite = $map['overwrite'];
        }

        return $model;
    }
}

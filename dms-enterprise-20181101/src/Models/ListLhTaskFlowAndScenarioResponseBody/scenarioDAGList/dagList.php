<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLhTaskFlowAndScenarioResponseBody\scenarioDAGList\dagList\dag;
use AlibabaCloud\Tea\Model;

class dagList extends Model
{
    /**
     * @var dag[]
     */
    public $dag;
    protected $_name = [
        'dag' => 'dag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dag) {
            $res['dag'] = [];
            if (null !== $this->dag && \is_array($this->dag)) {
                $n = 0;
                foreach ($this->dag as $item) {
                    $res['dag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dag'])) {
            if (!empty($map['dag'])) {
                $model->dag = [];
                $n          = 0;
                foreach ($map['dag'] as $item) {
                    $model->dag[$n++] = null !== $item ? dag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

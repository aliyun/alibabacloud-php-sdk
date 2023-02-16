<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListWorkflowInstanceResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListWorkflowInstanceResponseBody\data\wfInstanceInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var wfInstanceInfos[]
     */
    public $wfInstanceInfos;
    protected $_name = [
        'wfInstanceInfos' => 'WfInstanceInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wfInstanceInfos) {
            $res['WfInstanceInfos'] = [];
            if (null !== $this->wfInstanceInfos && \is_array($this->wfInstanceInfos)) {
                $n = 0;
                foreach ($this->wfInstanceInfos as $item) {
                    $res['WfInstanceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WfInstanceInfos'])) {
            if (!empty($map['WfInstanceInfos'])) {
                $model->wfInstanceInfos = [];
                $n                      = 0;
                foreach ($map['WfInstanceInfos'] as $item) {
                    $model->wfInstanceInfos[$n++] = null !== $item ? wfInstanceInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

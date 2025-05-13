<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListWorkflowInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListWorkflowInstanceResponseBody\data\wfInstanceInfos;

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
        if (\is_array($this->wfInstanceInfos)) {
            Model::validateArray($this->wfInstanceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->wfInstanceInfos) {
            if (\is_array($this->wfInstanceInfos)) {
                $res['WfInstanceInfos'] = [];
                $n1 = 0;
                foreach ($this->wfInstanceInfos as $item1) {
                    $res['WfInstanceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WfInstanceInfos'])) {
            if (!empty($map['WfInstanceInfos'])) {
                $model->wfInstanceInfos = [];
                $n1 = 0;
                foreach ($map['WfInstanceInfos'] as $item1) {
                    $model->wfInstanceInfos[$n1++] = wfInstanceInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

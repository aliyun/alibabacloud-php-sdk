<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventRedeployInstanceRequest\eventInfos;

class BatchEventRedeployInstanceRequest extends Model
{
    /**
     * @var eventInfos[]
     */
    public $eventInfos;
    protected $_name = [
        'eventInfos' => 'EventInfos',
    ];

    public function validate()
    {
        if (\is_array($this->eventInfos)) {
            Model::validateArray($this->eventInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventInfos) {
            if (\is_array($this->eventInfos)) {
                $res['EventInfos'] = [];
                $n1 = 0;
                foreach ($this->eventInfos as $item1) {
                    $res['EventInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EventInfos'])) {
            if (!empty($map['EventInfos'])) {
                $model->eventInfos = [];
                $n1 = 0;
                foreach ($map['EventInfos'] as $item1) {
                    $model->eventInfos[$n1] = eventInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

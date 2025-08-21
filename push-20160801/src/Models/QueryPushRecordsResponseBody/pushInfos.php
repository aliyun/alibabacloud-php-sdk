<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsResponseBody\pushInfos\pushInfo;

class pushInfos extends Model
{
    /**
     * @var pushInfo[]
     */
    public $pushInfo;
    protected $_name = [
        'pushInfo' => 'PushInfo',
    ];

    public function validate()
    {
        if (\is_array($this->pushInfo)) {
            Model::validateArray($this->pushInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushInfo) {
            if (\is_array($this->pushInfo)) {
                $res['PushInfo'] = [];
                $n1 = 0;
                foreach ($this->pushInfo as $item1) {
                    $res['PushInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PushInfo'])) {
            if (!empty($map['PushInfo'])) {
                $model->pushInfo = [];
                $n1 = 0;
                foreach ($map['PushInfo'] as $item1) {
                    $model->pushInfo[$n1] = pushInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

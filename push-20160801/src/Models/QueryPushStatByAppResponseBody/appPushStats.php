<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByAppResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByAppResponseBody\appPushStats\appPushStat;

class appPushStats extends Model
{
    /**
     * @var appPushStat[]
     */
    public $appPushStat;
    protected $_name = [
        'appPushStat' => 'AppPushStat',
    ];

    public function validate()
    {
        if (\is_array($this->appPushStat)) {
            Model::validateArray($this->appPushStat);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appPushStat) {
            if (\is_array($this->appPushStat)) {
                $res['AppPushStat'] = [];
                $n1 = 0;
                foreach ($this->appPushStat as $item1) {
                    $res['AppPushStat'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppPushStat'])) {
            if (!empty($map['AppPushStat'])) {
                $model->appPushStat = [];
                $n1 = 0;
                foreach ($map['AppPushStat'] as $item1) {
                    $model->appPushStat[$n1] = appPushStat::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

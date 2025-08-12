<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\matchExpress\matchExpress;

class matchExpress extends Model
{
    /**
     * @var matchExpress[]
     */
    public $matchExpress;
    protected $_name = [
        'matchExpress' => 'MatchExpress',
    ];

    public function validate()
    {
        if (\is_array($this->matchExpress)) {
            Model::validateArray($this->matchExpress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchExpress) {
            if (\is_array($this->matchExpress)) {
                $res['MatchExpress'] = [];
                $n1 = 0;
                foreach ($this->matchExpress as $item1) {
                    $res['MatchExpress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MatchExpress'])) {
            if (!empty($map['MatchExpress'])) {
                $model->matchExpress = [];
                $n1 = 0;
                foreach ($map['MatchExpress'] as $item1) {
                    $model->matchExpress[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

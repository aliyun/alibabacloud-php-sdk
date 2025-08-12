<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponseBody\hosts\host;

class hosts extends Model
{
    /**
     * @var host[]
     */
    public $host;
    protected $_name = [
        'host' => 'Host',
    ];

    public function validate()
    {
        if (\is_array($this->host)) {
            Model::validateArray($this->host);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->host) {
            if (\is_array($this->host)) {
                $res['Host'] = [];
                $n1 = 0;
                foreach ($this->host as $item1) {
                    $res['Host'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Host'])) {
            if (!empty($map['Host'])) {
                $model->host = [];
                $n1 = 0;
                foreach ($map['Host'] as $item1) {
                    $model->host[$n1] = host::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmLogsResponseBody\logs\log;

class logs extends Model
{
    /**
     * @var log[]
     */
    public $log;
    protected $_name = [
        'log' => 'Log',
    ];

    public function validate()
    {
        if (\is_array($this->log)) {
            Model::validateArray($this->log);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->log) {
            if (\is_array($this->log)) {
                $res['Log'] = [];
                $n1 = 0;
                foreach ($this->log as $item1) {
                    $res['Log'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Log'])) {
            if (!empty($map['Log'])) {
                $model->log = [];
                $n1 = 0;
                foreach ($map['Log'] as $item1) {
                    $model->log[$n1] = log::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords\list_\callDetailRecord;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords\list_\callDetailRecord\agents\callDetailAgent;
use AlibabaCloud\Tea\Model;

class agents extends Model
{
    /**
     * @var callDetailAgent[]
     */
    public $callDetailAgent;
    protected $_name = [
        'callDetailAgent' => 'CallDetailAgent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callDetailAgent) {
            $res['CallDetailAgent'] = [];
            if (null !== $this->callDetailAgent && \is_array($this->callDetailAgent)) {
                $n = 0;
                foreach ($this->callDetailAgent as $item) {
                    $res['CallDetailAgent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallDetailAgent'])) {
            if (!empty($map['CallDetailAgent'])) {
                $model->callDetailAgent = [];
                $n                      = 0;
                foreach ($map['CallDetailAgent'] as $item) {
                    $model->callDetailAgent[$n++] = null !== $item ? callDetailAgent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

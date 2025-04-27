<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetOpenStoreUsageResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $currentUsage;

    /**
     * @var int
     */
    public $lastDayUsage;
    protected $_name = [
        'currentUsage' => 'currentUsage',
        'lastDayUsage' => 'lastDayUsage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentUsage) {
            $res['currentUsage'] = $this->currentUsage;
        }

        if (null !== $this->lastDayUsage) {
            $res['lastDayUsage'] = $this->lastDayUsage;
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
        if (isset($map['currentUsage'])) {
            $model->currentUsage = $map['currentUsage'];
        }

        if (isset($map['lastDayUsage'])) {
            $model->lastDayUsage = $map['lastDayUsage'];
        }

        return $model;
    }
}

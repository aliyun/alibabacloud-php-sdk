<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponseBody\data\targets;

use AlibabaCloud\Tea\Model;

class concurrentConfig extends Model
{
    /**
     * @description The maximum number of concurrent events allowed in the event target.
     *
     * @example 10
     *
     * @var int
     */
    public $concurrency;
    protected $_name = [
        'concurrency' => 'Concurrency',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return concurrentConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsServiceLogResponseBody;

use AlibabaCloud\Tea\Model;

class serviceLogContexts extends Model
{
    /**
     * @description The log content.
     *
     * @example Statistics: generator = 369173; collector = 470109; replicator = 2470; ping = 2/2/2; execute = 29/29/29; rt = 29/29/29; state = IDLE; queries = -1; exceptions = {connects = 0, replicates = 0}; infos = {}
     *
     * @var string
     */
    public $context;

    /**
     * @description The log level.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $state;

    /**
     * @description The time when the logs were collected. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-05-13T09:13:39.443+00:00
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'context' => 'Context',
        'state'   => 'State',
        'time'    => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceLogContexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

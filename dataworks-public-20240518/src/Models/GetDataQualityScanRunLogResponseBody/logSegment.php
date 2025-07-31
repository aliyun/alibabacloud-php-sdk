<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanRunLogResponseBody;

use AlibabaCloud\Tea\Model;

class logSegment extends Model
{
    /**
     * @var string
     */
    public $log;

    /**
     * @example 512000
     *
     * @var int
     */
    public $nextOffset;
    protected $_name = [
        'log' => 'Log',
        'nextOffset' => 'NextOffset',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }
        if (null !== $this->nextOffset) {
            $res['NextOffset'] = $this->nextOffset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logSegment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }
        if (isset($map['NextOffset'])) {
            $model->nextOffset = $map['NextOffset'];
        }

        return $model;
    }
}

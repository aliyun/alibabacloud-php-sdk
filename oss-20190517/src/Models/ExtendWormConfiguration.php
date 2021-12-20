<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ExtendWormConfiguration extends Model
{
    /**
     * @description The number of days for which objects can be retained
     *
     * @var int
     */
    public $retentionPeriodInDays;
    protected $_name = [
        'retentionPeriodInDays' => 'RetentionPeriodInDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->retentionPeriodInDays) {
            $res['RetentionPeriodInDays'] = $this->retentionPeriodInDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtendWormConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RetentionPeriodInDays'])) {
            $model->retentionPeriodInDays = $map['RetentionPeriodInDays'];
        }

        return $model;
    }
}

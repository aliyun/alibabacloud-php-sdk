<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTaskConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class scopeFilter extends Model
{
    /**
     * @var string
     */
    public $end;

    /**
     * @var int
     */
    public $lastN;

    /**
     * @var int
     */
    public $scopeFilterType;

    /**
     * @var string
     */
    public $start;
    protected $_name = [
        'end' => 'end',
        'lastN' => 'lastN',
        'scopeFilterType' => 'scopeFilterType',
        'start' => 'start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        if (null !== $this->lastN) {
            $res['lastN'] = $this->lastN;
        }

        if (null !== $this->scopeFilterType) {
            $res['scopeFilterType'] = $this->scopeFilterType;
        }

        if (null !== $this->start) {
            $res['start'] = $this->start;
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
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['lastN'])) {
            $model->lastN = $map['lastN'];
        }

        if (isset($map['scopeFilterType'])) {
            $model->scopeFilterType = $map['scopeFilterType'];
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}

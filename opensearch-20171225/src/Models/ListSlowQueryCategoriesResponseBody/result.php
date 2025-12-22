<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryCategoriesResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $analyzeStatus;

    /**
     * @var int
     */
    public $end;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'analyzeStatus' => 'analyzeStatus',
        'end' => 'end',
        'start' => 'start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analyzeStatus) {
            $res['analyzeStatus'] = $this->analyzeStatus;
        }

        if (null !== $this->end) {
            $res['end'] = $this->end;
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
        if (isset($map['analyzeStatus'])) {
            $model->analyzeStatus = $map['analyzeStatus'];
        }

        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}

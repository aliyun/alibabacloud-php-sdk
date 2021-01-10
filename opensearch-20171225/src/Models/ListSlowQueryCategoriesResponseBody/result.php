<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryCategoriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $analyzeStatus;

    /**
     * @var int
     */
    public $end;
    protected $_name = [
        'start'         => 'start',
        'analyzeStatus' => 'analyzeStatus',
        'end'           => 'end',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->analyzeStatus) {
            $res['analyzeStatus'] = $this->analyzeStatus;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }
        if (isset($map['analyzeStatus'])) {
            $model->analyzeStatus = $map['analyzeStatus'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        return $model;
    }
}

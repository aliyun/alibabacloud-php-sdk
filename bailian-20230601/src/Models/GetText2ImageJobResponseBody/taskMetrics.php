<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\GetText2ImageJobResponseBody;

use AlibabaCloud\Tea\Model;

class taskMetrics extends Model
{
    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $succeeded;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'failed'    => 'Failed',
        'succeeded' => 'Succeeded',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

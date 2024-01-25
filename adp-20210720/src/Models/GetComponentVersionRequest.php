<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GetComponentVersionRequest extends Model
{
    /**
     * @var bool
     */
    public $withoutChartContent;
    protected $_name = [
        'withoutChartContent' => 'withoutChartContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withoutChartContent) {
            $res['withoutChartContent'] = $this->withoutChartContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetComponentVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['withoutChartContent'])) {
            $model->withoutChartContent = $map['withoutChartContent'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $asyncConcurrency;
    protected $_name = [
        'asyncConcurrency' => 'asyncConcurrency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncConcurrency) {
            $res['asyncConcurrency'] = $this->asyncConcurrency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['asyncConcurrency'])) {
            $model->asyncConcurrency = $map['asyncConcurrency'];
        }

        return $model;
    }
}

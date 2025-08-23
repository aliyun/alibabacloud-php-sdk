<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $asyncConcurrency;
    protected $_name = [
        'asyncConcurrency' => 'asyncConcurrency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncConcurrency) {
            $res['asyncConcurrency'] = $this->asyncConcurrency;
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
        if (isset($map['asyncConcurrency'])) {
            $model->asyncConcurrency = $map['asyncConcurrency'];
        }

        return $model;
    }
}

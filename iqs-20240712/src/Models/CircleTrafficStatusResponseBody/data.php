<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\CircleTrafficStatusResponseBody;

use AlibabaCloud\SDK\IQS\V20240712\Models\CircleTrafficStatusResponseBody\data\evaluation;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var evaluation
     */
    public $evaluation;
    protected $_name = [
        'description' => 'description',
        'evaluation'  => 'evaluation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->evaluation) {
            $res['evaluation'] = null !== $this->evaluation ? $this->evaluation->toMap() : null;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['evaluation'])) {
            $model->evaluation = evaluation::fromMap($map['evaluation']);
        }

        return $model;
    }
}

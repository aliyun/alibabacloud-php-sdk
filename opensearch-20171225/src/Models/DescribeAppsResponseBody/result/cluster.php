<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result;

use AlibabaCloud\Dara\Model;

class cluster extends Model
{
    /**
     * @var int
     */
    public $maxQueryClauseLength;

    /**
     * @var int
     */
    public $maxTimeoutMS;
    protected $_name = [
        'maxQueryClauseLength' => 'maxQueryClauseLength',
        'maxTimeoutMS' => 'maxTimeoutMS',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxQueryClauseLength) {
            $res['maxQueryClauseLength'] = $this->maxQueryClauseLength;
        }

        if (null !== $this->maxTimeoutMS) {
            $res['maxTimeoutMS'] = $this->maxTimeoutMS;
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
        if (isset($map['maxQueryClauseLength'])) {
            $model->maxQueryClauseLength = $map['maxQueryClauseLength'];
        }

        if (isset($map['maxTimeoutMS'])) {
            $model->maxTimeoutMS = $map['maxTimeoutMS'];
        }

        return $model;
    }
}

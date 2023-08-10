<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\App;

use AlibabaCloud\Tea\Model;

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
        'maxTimeoutMS'         => 'maxTimeoutMS',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return cluster
     */
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

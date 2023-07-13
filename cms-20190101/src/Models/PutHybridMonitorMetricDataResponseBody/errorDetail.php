<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataResponseBody;

use AlibabaCloud\Tea\Model;

class errorDetail extends Model
{
    /**
     * @example label name :123 not match [a-zA-Z_][a-zA-Z0-9_]*
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 0
     *
     * @var int
     */
    public $index;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'index'        => 'Index',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        return $model;
    }
}

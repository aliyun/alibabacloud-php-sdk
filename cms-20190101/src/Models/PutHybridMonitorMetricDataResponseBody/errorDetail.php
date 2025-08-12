<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataResponseBody;

use AlibabaCloud\Dara\Model;

class errorDetail extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $index;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'index' => 'Index',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

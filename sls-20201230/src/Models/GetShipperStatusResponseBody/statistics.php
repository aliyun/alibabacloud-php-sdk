<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetShipperStatusResponseBody;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var int
     */
    public $fail;

    /**
     * @var int
     */
    public $running;

    /**
     * @var int
     */
    public $success;
    protected $_name = [
        'fail'    => 'fail',
        'running' => 'running',
        'success' => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fail) {
            $res['fail'] = $this->fail;
        }
        if (null !== $this->running) {
            $res['running'] = $this->running;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fail'])) {
            $model->fail = $map['fail'];
        }
        if (isset($map['running'])) {
            $model->running = $map['running'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430\Models\ImportDevicesResponseBody;

use AlibabaCloud\SDK\Vcs\V20190430\Models\ImportDevicesResponseBody\data\failure;
use AlibabaCloud\SDK\Vcs\V20190430\Models\ImportDevicesResponseBody\data\success;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var failure[]
     */
    public $failure;

    /**
     * @var success[]
     */
    public $success;
    protected $_name = [
        'failure' => 'Failure',
        'success' => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failure) {
            $res['Failure'] = [];
            if (null !== $this->failure && \is_array($this->failure)) {
                $n = 0;
                foreach ($this->failure as $item) {
                    $res['Failure'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = [];
            if (null !== $this->success && \is_array($this->success)) {
                $n = 0;
                foreach ($this->success as $item) {
                    $res['Success'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Failure'])) {
            if (!empty($map['Failure'])) {
                $model->failure = [];
                $n              = 0;
                foreach ($map['Failure'] as $item) {
                    $model->failure[$n++] = null !== $item ? failure::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            if (!empty($map['Success'])) {
                $model->success = [];
                $n              = 0;
                foreach ($map['Success'] as $item) {
                    $model->success[$n++] = null !== $item ? success::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

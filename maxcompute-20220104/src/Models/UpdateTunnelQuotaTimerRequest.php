<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateTunnelQuotaTimerRequest\body;
use AlibabaCloud\Tea\Model;

class UpdateTunnelQuotaTimerRequest extends Model
{
    /**
     * @description The request body.
     *
     * @var body[]
     */
    public $body;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'body' => 'body',
        'timezone' => 'timezone',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = [];
            if (null !== $this->body && \is_array($this->body)) {
                $n = 0;
                foreach ($this->body as $item) {
                    $res['body'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTunnelQuotaTimerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n = 0;
                foreach ($map['body'] as $item) {
                    $model->body[$n++] = null !== $item ? body::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        return $model;
    }
}

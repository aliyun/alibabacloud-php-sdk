<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute;

use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies\fallback;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies\retry;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies\timeout;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @var fallback
     */
    public $fallback;

    /**
     * @var retry
     */
    public $retry;

    /**
     * @var timeout
     */
    public $timeout;
    protected $_name = [
        'fallback' => 'Fallback',
        'retry'    => 'Retry',
        'timeout'  => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fallback) {
            $res['Fallback'] = null !== $this->fallback ? $this->fallback->toMap() : null;
        }
        if (null !== $this->retry) {
            $res['Retry'] = null !== $this->retry ? $this->retry->toMap() : null;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = null !== $this->timeout ? $this->timeout->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fallback'])) {
            $model->fallback = fallback::fromMap($map['Fallback']);
        }
        if (isset($map['Retry'])) {
            $model->retry = retry::fromMap($map['Retry']);
        }
        if (isset($map['Timeout'])) {
            $model->timeout = timeout::fromMap($map['Timeout']);
        }

        return $model;
    }
}

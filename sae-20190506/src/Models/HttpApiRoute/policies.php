<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies\fallback;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies\retry;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies\timeout;

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
        'retry' => 'Retry',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (null !== $this->fallback) {
            $this->fallback->validate();
        }
        if (null !== $this->retry) {
            $this->retry->validate();
        }
        if (null !== $this->timeout) {
            $this->timeout->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fallback) {
            $res['Fallback'] = null !== $this->fallback ? $this->fallback->toArray($noStream) : $this->fallback;
        }

        if (null !== $this->retry) {
            $res['Retry'] = null !== $this->retry ? $this->retry->toArray($noStream) : $this->retry;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = null !== $this->timeout ? $this->timeout->toArray($noStream) : $this->timeout;
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\nodes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\nodes\nodeConfig\denyPolicy;

class nodeConfig extends Model
{
    /**
     * @var denyPolicy
     */
    public $denyPolicy;

    /**
     * @var int
     */
    public $retry;

    /**
     * @var string
     */
    public $scanEngine;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'denyPolicy' => 'DenyPolicy',
        'retry' => 'Retry',
        'scanEngine' => 'ScanEngine',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (null !== $this->denyPolicy) {
            $this->denyPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->denyPolicy) {
            $res['DenyPolicy'] = null !== $this->denyPolicy ? $this->denyPolicy->toArray($noStream) : $this->denyPolicy;
        }

        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }

        if (null !== $this->scanEngine) {
            $res['ScanEngine'] = $this->scanEngine;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['DenyPolicy'])) {
            $model->denyPolicy = denyPolicy::fromMap($map['DenyPolicy']);
        }

        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }

        if (isset($map['ScanEngine'])) {
            $model->scanEngine = $map['ScanEngine'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}

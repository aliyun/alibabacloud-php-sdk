<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\nodes;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\nodes\nodeConfig\denyPolicy;
use AlibabaCloud\Tea\Model;

class nodeConfig extends Model
{
    /**
     * @var denyPolicy
     */
    public $denyPolicy;

    /**
     * @example 3
     *
     * @var int
     */
    public $retry;

    /**
     * @example ACR_SCAN_SERVICE
     *
     * @var string
     */
    public $scanEngine;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'denyPolicy' => 'DenyPolicy',
        'retry'      => 'Retry',
        'scanEngine' => 'ScanEngine',
        'timeout'    => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->denyPolicy) {
            $res['DenyPolicy'] = null !== $this->denyPolicy ? $this->denyPolicy->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return nodeConfig
     */
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

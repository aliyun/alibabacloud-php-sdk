<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RunClusterInspectRequest extends Model
{
    /**
     * @description The idempotency token that ensures an API request completes no more than one time.
     *
     * @example c82e6987e2961451182edacd74faf
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'clientToken' => 'clientToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunClusterInspectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}

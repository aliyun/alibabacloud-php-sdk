<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class InvokeFunctionHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example Sync
     *
     * @var string
     */
    public $xFcInvocationType;

    /**
     * @example Tail
     *
     * @var string
     */
    public $xFcLogType;
    protected $_name = [
        'xFcInvocationType' => 'x-fc-invocation-type',
        'xFcLogType'        => 'x-fc-log-type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xFcInvocationType) {
            $res['x-fc-invocation-type'] = $this->xFcInvocationType;
        }
        if (null !== $this->xFcLogType) {
            $res['x-fc-log-type'] = $this->xFcLogType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeFunctionHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-fc-invocation-type'])) {
            $model->xFcInvocationType = $map['x-fc-invocation-type'];
        }
        if (isset($map['x-fc-log-type'])) {
            $model->xFcLogType = $map['x-fc-log-type'];
        }

        return $model;
    }
}

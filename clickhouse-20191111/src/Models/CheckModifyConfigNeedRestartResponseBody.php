<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CheckModifyConfigNeedRestartResponseBody extends Model
{
    /**
     * @description Indicates whether the cluster was restarted after you modified the configuration parameters. Valid values:
     *
     *   **true**: The cluster was restarted.
     *   **false**: The cluster was not restarted.
     *
     * @example true
     *
     * @var bool
     */
    public $needRestart;

    /**
     * @description The request ID.
     *
     * @example 06798FEE-BEF2-5FAF-A30D-728973BBE97C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'needRestart' => 'NeedRestart',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckModifyConfigNeedRestartResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

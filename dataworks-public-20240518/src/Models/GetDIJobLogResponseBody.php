<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetDIJobLogResponseBody extends Model
{
    /**
     * @description The log.
     *
     * @example >>>>>>>> stdout:n++++++++++++++++++executing sql: create database if not exists jindo_test location \\"oss://pangbei-hdfs/tmp/hive\\" n++n
     *
     * @var string
     */
    public $log;

    /**
     * @description The request ID. You can use the ID to query logs and troubleshoot issues.
     *
     * @example 1AFAE64E-D1BE-432B-A9****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'log'       => 'Log',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDIJobLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateEdgeContainerAppLogRiverResponseBody extends Model
{
    /**
     * @description The log path of the container.
     *
     * @example /root/hello.log
     *
     * @var string
     */
    public $path;

    /**
     * @description The request ID.
     *
     * @example 42DE97FA-45D2-5615-9A31-55D9EC0D7563
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the standard output of the container is collected.
     *
     * @example true
     *
     * @var bool
     */
    public $stdout;
    protected $_name = [
        'path' => 'Path',
        'requestId' => 'RequestId',
        'stdout' => 'Stdout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stdout) {
            $res['Stdout'] = $this->stdout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEdgeContainerAppLogRiverResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Stdout'])) {
            $model->stdout = $map['Stdout'];
        }

        return $model;
    }
}

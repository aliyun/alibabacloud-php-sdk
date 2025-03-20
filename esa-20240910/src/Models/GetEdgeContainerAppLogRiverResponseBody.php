<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetEdgeContainerAppLogRiverResponseBody extends Model
{
    /**
     * @description The log path of the container. It must be an absolute path that starts with a forward slash (/). You can use asterisks (\\*) and question marks (?) as wildcards.
     *
     * @example /root/hello.log
     *
     * @var string
     */
    public $path;

    /**
     * @description The request ID.
     *
     * @example 0AEDAF20-4DDF-4165-8750-47FF9C1929C9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the standard output of the container is collected.
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
     * @return GetEdgeContainerAppLogRiverResponseBody
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterOperationHostTaskLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $stderr;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stdout;
    protected $_name = [
        'stderr'    => 'Stderr',
        'requestId' => 'RequestId',
        'stdout'    => 'Stdout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stderr) {
            $res['Stderr'] = $this->stderr;
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
     * @return DescribeClusterOperationHostTaskLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stderr'])) {
            $model->stderr = $map['Stderr'];
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

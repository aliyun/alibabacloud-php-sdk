<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterOperationHostTaskLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stdout;

    /**
     * @var string
     */
    public $stderr;
    protected $_name = [
        'requestId' => 'RequestId',
        'stdout'    => 'Stdout',
        'stderr'    => 'Stderr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stdout) {
            $res['Stdout'] = $this->stdout;
        }
        if (null !== $this->stderr) {
            $res['Stderr'] = $this->stderr;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Stdout'])) {
            $model->stdout = $map['Stdout'];
        }
        if (isset($map['Stderr'])) {
            $model->stderr = $map['Stderr'];
        }

        return $model;
    }
}

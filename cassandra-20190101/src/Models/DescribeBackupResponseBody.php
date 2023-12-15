<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupResponseBody\backup;
use AlibabaCloud\Tea\Model;

class DescribeBackupResponseBody extends Model
{
    /**
     * @var backup
     */
    public $backup;

    /**
     * @example 200FB963-9359-4CAD-90B7-96395C88FD9D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backup'    => 'Backup',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backup) {
            $res['Backup'] = null !== $this->backup ? $this->backup->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backup'])) {
            $model->backup = backup::fromMap($map['Backup']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

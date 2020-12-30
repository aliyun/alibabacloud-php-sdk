<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupResponseBody\backup;
use AlibabaCloud\Tea\Model;

class DescribeBackupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backup
     */
    public $backup;
    protected $_name = [
        'requestId' => 'RequestId',
        'backup'    => 'Backup',
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
        if (null !== $this->backup) {
            $res['Backup'] = null !== $this->backup ? $this->backup->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Backup'])) {
            $model->backup = backup::fromMap($map['Backup']);
        }

        return $model;
    }
}

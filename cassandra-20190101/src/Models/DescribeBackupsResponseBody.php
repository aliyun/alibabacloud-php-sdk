<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupsResponseBody\backups;
use AlibabaCloud\Tea\Model;

class DescribeBackupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backups
     */
    public $backups;
    protected $_name = [
        'requestId' => 'RequestId',
        'backups'   => 'Backups',
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
        if (null !== $this->backups) {
            $res['Backups'] = null !== $this->backups ? $this->backups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Backups'])) {
            $model->backups = backups::fromMap($map['Backups']);
        }

        return $model;
    }
}

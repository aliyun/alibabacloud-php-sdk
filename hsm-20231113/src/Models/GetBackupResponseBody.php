<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\SDK\Hsm\V20231113\Models\GetBackupResponseBody\backup;
use AlibabaCloud\Tea\Model;

class GetBackupResponseBody extends Model
{
    /**
     * @var backup
     */
    public $backup;

    /**
     * @example 4C467B38-3910-447D-87BC-AC049166F216
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
     * @return GetBackupResponseBody
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

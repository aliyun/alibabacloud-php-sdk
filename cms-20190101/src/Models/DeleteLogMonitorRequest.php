<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLogMonitorRequest extends Model
{
    /**
     * @var int
     */
    public $logId;
    protected $_name = [
        'logId' => 'LogId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLogMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class RunClusterInspectResponseBody extends Model
{
    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'reportId' => 'reportId',
        'requestId' => 'requestId',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}

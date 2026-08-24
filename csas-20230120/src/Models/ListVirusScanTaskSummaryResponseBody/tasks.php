<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTaskSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $virusFileCount;
    protected $_name = [
        'taskId' => 'TaskId',
        'virusFileCount' => 'VirusFileCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->virusFileCount) {
            $res['VirusFileCount'] = $this->virusFileCount;
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['VirusFileCount'])) {
            $model->virusFileCount = $map['VirusFileCount'];
        }

        return $model;
    }
}

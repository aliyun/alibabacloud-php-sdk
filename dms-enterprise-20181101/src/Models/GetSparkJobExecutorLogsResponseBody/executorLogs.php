<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSparkJobExecutorLogsResponseBody;

use AlibabaCloud\Tea\Model;

class executorLogs extends Model
{
    /**
     * @var string[]
     */
    public $executorLogs;
    protected $_name = [
        'executorLogs' => 'executorLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executorLogs) {
            $res['executorLogs'] = $this->executorLogs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executorLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['executorLogs'])) {
            if (!empty($map['executorLogs'])) {
                $model->executorLogs = $map['executorLogs'];
            }
        }

        return $model;
    }
}

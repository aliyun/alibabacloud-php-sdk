<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QuerySummarySceneRuleLogResponse\data\logList\logInfo;
use AlibabaCloud\Tea\Model;

class logList extends Model
{
    /**
     * @var logInfo[]
     */
    public $logInfo;
    protected $_name = [
        'logInfo' => 'LogInfo',
    ];

    public function validate()
    {
        Model::validateRequired('logInfo', $this->logInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logInfo) {
            $res['LogInfo'] = [];
            if (null !== $this->logInfo && \is_array($this->logInfo)) {
                $n = 0;
                foreach ($this->logInfo as $item) {
                    $res['LogInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogInfo'])) {
            if (!empty($map['LogInfo'])) {
                $model->logInfo = [];
                $n              = 0;
                foreach ($map['LogInfo'] as $item) {
                    $model->logInfo[$n++] = null !== $item ? logInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

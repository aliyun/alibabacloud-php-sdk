<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchExportWordTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://xxx/xxx.xls
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $taskStats;
    protected $_name = [
        'fileUrl' => 'FileUrl',
        'taskStats' => 'TaskStats',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->taskStats) {
            $res['TaskStats'] = $this->taskStats;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['TaskStats'])) {
            $model->taskStats = $map['TaskStats'];
        }

        return $model;
    }
}

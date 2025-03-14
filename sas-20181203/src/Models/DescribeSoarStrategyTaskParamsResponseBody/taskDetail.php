<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarStrategyTaskParamsResponseBody;

use AlibabaCloud\Tea\Model;

class taskDetail extends Model
{
    /**
     * @description Task parameters.
     *
     * @example {"summary":[{"name":"email","type":"String","isRequired":false,"fromProperty":"notifyConfig.email"}]}
     *
     * @var string
     */
    public $params;

    /**
     * @description 任务名称。
     *
     * @example task1
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'params' => 'Params',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}

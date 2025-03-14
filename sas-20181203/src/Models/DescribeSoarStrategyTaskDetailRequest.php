<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarStrategyTaskDetailRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the policy task.
     *
     * >  You can call the [DescribeSoarStrategyTasks](~~DescribeSoarStrategyTasks~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 10585
     *
     * @var int
     */
    public $strategyTaskId;
    protected $_name = [
        'lang' => 'Lang',
        'strategyTaskId' => 'StrategyTaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->strategyTaskId) {
            $res['StrategyTaskId'] = $this->strategyTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarStrategyTaskDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StrategyTaskId'])) {
            $model->strategyTaskId = $map['StrategyTaskId'];
        }

        return $model;
    }
}

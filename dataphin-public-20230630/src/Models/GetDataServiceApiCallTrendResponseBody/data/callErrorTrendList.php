<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody\data;

use AlibabaCloud\Tea\Model;

class callErrorTrendList extends Model
{
    /**
     * @example 1021
     *
     * @var int
     */
    public $callCount;

    /**
     * @example 102
     *
     * @var int
     */
    public $errorCount;

    /**
     * @example 3
     *
     * @var string
     */
    public $minute;
    protected $_name = [
        'callCount' => 'CallCount',
        'errorCount' => 'ErrorCount',
        'minute' => 'Minute',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callCount) {
            $res['CallCount'] = $this->callCount;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callErrorTrendList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallCount'])) {
            $model->callCount = $map['CallCount'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }

        return $model;
    }
}

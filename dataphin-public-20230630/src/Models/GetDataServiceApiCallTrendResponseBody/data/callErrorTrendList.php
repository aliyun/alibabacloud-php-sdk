<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallTrendResponseBody\data;

use AlibabaCloud\Dara\Model;

class callErrorTrendList extends Model
{
    /**
     * @var int
     */
    public $callCount;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var string
     */
    public $minute;
    protected $_name = [
        'callCount' => 'CallCount',
        'errorCount' => 'ErrorCount',
        'minute' => 'Minute',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

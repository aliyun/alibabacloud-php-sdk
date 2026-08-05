<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\GetFunctionInstanceResponseBody\result;

use AlibabaCloud\Dara\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $dagStatus;

    /**
     * @var int
     */
    public $lastRunTime;
    protected $_name = [
        'dagStatus' => 'dagStatus',
        'lastRunTime' => 'lastRunTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagStatus) {
            $res['dagStatus'] = $this->dagStatus;
        }

        if (null !== $this->lastRunTime) {
            $res['lastRunTime'] = $this->lastRunTime;
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
        if (isset($map['dagStatus'])) {
            $model->dagStatus = $map['dagStatus'];
        }

        if (isset($map['lastRunTime'])) {
            $model->lastRunTime = $map['lastRunTime'];
        }

        return $model;
    }
}

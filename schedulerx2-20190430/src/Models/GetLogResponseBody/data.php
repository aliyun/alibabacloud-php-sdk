<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $logs;
    protected $_name = [
        'logs' => 'Logs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
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
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = $map['Logs'];
            }
        }

        return $model;
    }
}

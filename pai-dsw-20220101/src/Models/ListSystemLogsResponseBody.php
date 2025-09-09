<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListSystemLogsResponseBody\systemLogs;

class ListSystemLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $offset;

    /**
     * @var systemLogs[]
     */
    public $systemLogs;
    protected $_name = [
        'offset' => 'Offset',
        'systemLogs' => 'SystemLogs',
    ];

    public function validate()
    {
        if (\is_array($this->systemLogs)) {
            Model::validateArray($this->systemLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->systemLogs) {
            if (\is_array($this->systemLogs)) {
                $res['SystemLogs'] = [];
                $n1 = 0;
                foreach ($this->systemLogs as $item1) {
                    $res['SystemLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['SystemLogs'])) {
            if (!empty($map['SystemLogs'])) {
                $model->systemLogs = [];
                $n1 = 0;
                foreach ($map['SystemLogs'] as $item1) {
                    $model->systemLogs[$n1] = systemLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

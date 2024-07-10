<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceLogsOutput extends Model
{
    /**
     * @var WebLogEntry[]
     */
    public $webLogEntrys;
    protected $_name = [
        'webLogEntrys' => 'WebLogEntrys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webLogEntrys) {
            $res['WebLogEntrys'] = [];
            if (null !== $this->webLogEntrys && \is_array($this->webLogEntrys)) {
                $n = 0;
                foreach ($this->webLogEntrys as $item) {
                    $res['WebLogEntrys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceLogsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WebLogEntrys'])) {
            if (!empty($map['WebLogEntrys'])) {
                $model->webLogEntrys = [];
                $n                   = 0;
                foreach ($map['WebLogEntrys'] as $item) {
                    $model->webLogEntrys[$n++] = null !== $item ? WebLogEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

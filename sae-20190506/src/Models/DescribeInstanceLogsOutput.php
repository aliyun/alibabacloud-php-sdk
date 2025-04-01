<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->webLogEntrys)) {
            Model::validateArray($this->webLogEntrys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webLogEntrys) {
            if (\is_array($this->webLogEntrys)) {
                $res['WebLogEntrys'] = [];
                $n1 = 0;
                foreach ($this->webLogEntrys as $item1) {
                    $res['WebLogEntrys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WebLogEntrys'])) {
            if (!empty($map['WebLogEntrys'])) {
                $model->webLogEntrys = [];
                $n1 = 0;
                foreach ($map['WebLogEntrys'] as $item1) {
                    $model->webLogEntrys[$n1++] = WebLogEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

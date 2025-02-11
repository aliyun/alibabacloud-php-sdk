<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupsResponseBody\items\backup;

class items extends Model
{
    /**
     * @var backup[]
     */
    public $backup;
    protected $_name = [
        'backup' => 'Backup',
    ];

    public function validate()
    {
        if (\is_array($this->backup)) {
            Model::validateArray($this->backup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backup) {
            if (\is_array($this->backup)) {
                $res['Backup'] = [];
                $n1            = 0;
                foreach ($this->backup as $item1) {
                    $res['Backup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Backup'])) {
            if (!empty($map['Backup'])) {
                $model->backup = [];
                $n1            = 0;
                foreach ($map['Backup'] as $item1) {
                    $model->backup[$n1++] = backup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

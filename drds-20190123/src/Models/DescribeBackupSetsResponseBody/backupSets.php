<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets\backupSet;
use AlibabaCloud\Tea\Model;

class backupSets extends Model
{
    /**
     * @var backupSet[]
     */
    public $backupSet;
    protected $_name = [
        'backupSet' => 'backupSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSet) {
            $res['backupSet'] = [];
            if (null !== $this->backupSet && \is_array($this->backupSet)) {
                $n = 0;
                foreach ($this->backupSet as $item) {
                    $res['backupSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backupSet'])) {
            if (!empty($map['backupSet'])) {
                $model->backupSet = [];
                $n                = 0;
                foreach ($map['backupSet'] as $item) {
                    $model->backupSet[$n++] = null !== $item ? backupSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

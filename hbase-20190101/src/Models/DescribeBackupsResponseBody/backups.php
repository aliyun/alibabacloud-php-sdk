<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupsResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupsResponseBody\backups\backup;
use AlibabaCloud\Tea\Model;

class backups extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backup) {
            $res['Backup'] = [];
            if (null !== $this->backup && \is_array($this->backup)) {
                $n = 0;
                foreach ($this->backup as $item) {
                    $res['Backup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backup'])) {
            if (!empty($map['Backup'])) {
                $model->backup = [];
                $n             = 0;
                foreach ($map['Backup'] as $item) {
                    $model->backup[$n++] = null !== $item ? backup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

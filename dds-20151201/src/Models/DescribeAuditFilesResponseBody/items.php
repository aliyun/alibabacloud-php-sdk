<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditFilesResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditFilesResponseBody\items\logFile;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var logFile[]
     */
    public $logFile;
    protected $_name = [
        'logFile' => 'LogFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logFile) {
            $res['LogFile'] = [];
            if (null !== $this->logFile && \is_array($this->logFile)) {
                $n = 0;
                foreach ($this->logFile as $item) {
                    $res['LogFile'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogFile'])) {
            if (!empty($map['LogFile'])) {
                $model->logFile = [];
                $n              = 0;
                foreach ($map['LogFile'] as $item) {
                    $model->logFile[$n++] = null !== $item ? logFile::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesResponseBody\items\logFile;

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
        if (\is_array($this->logFile)) {
            Model::validateArray($this->logFile);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logFile) {
            if (\is_array($this->logFile)) {
                $res['LogFile'] = [];
                $n1 = 0;
                foreach ($this->logFile as $item1) {
                    $res['LogFile'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogFile'])) {
            if (!empty($map['LogFile'])) {
                $model->logFile = [];
                $n1 = 0;
                foreach ($map['LogFile'] as $item1) {
                    $model->logFile[$n1] = logFile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

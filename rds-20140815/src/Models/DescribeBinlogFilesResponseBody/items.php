<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesResponseBody\items\binLogFile;

class items extends Model
{
    /**
     * @var binLogFile[]
     */
    public $binLogFile;
    protected $_name = [
        'binLogFile' => 'BinLogFile',
    ];

    public function validate()
    {
        if (\is_array($this->binLogFile)) {
            Model::validateArray($this->binLogFile);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->binLogFile) {
            if (\is_array($this->binLogFile)) {
                $res['BinLogFile'] = [];
                $n1 = 0;
                foreach ($this->binLogFile as $item1) {
                    $res['BinLogFile'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BinLogFile'])) {
            if (!empty($map['BinLogFile'])) {
                $model->binLogFile = [];
                $n1 = 0;
                foreach ($map['BinLogFile'] as $item1) {
                    $model->binLogFile[$n1] = binLogFile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

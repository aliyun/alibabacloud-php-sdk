<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponseBody\items\errorLog;

class items extends Model
{
    /**
     * @var errorLog[]
     */
    public $errorLog;
    protected $_name = [
        'errorLog' => 'ErrorLog',
    ];

    public function validate()
    {
        if (\is_array($this->errorLog)) {
            Model::validateArray($this->errorLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorLog) {
            if (\is_array($this->errorLog)) {
                $res['ErrorLog'] = [];
                $n1              = 0;
                foreach ($this->errorLog as $item1) {
                    $res['ErrorLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ErrorLog'])) {
            if (!empty($map['ErrorLog'])) {
                $model->errorLog = [];
                $n1              = 0;
                foreach ($map['ErrorLog'] as $item1) {
                    $model->errorLog[$n1++] = errorLog::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

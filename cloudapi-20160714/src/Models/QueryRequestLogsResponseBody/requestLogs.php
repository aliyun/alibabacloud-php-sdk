<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsResponseBody\requestLogs\requestLog;

class requestLogs extends Model
{
    /**
     * @var requestLog[]
     */
    public $requestLog;
    protected $_name = [
        'requestLog' => 'RequestLog',
    ];

    public function validate()
    {
        if (\is_array($this->requestLog)) {
            Model::validateArray($this->requestLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestLog) {
            if (\is_array($this->requestLog)) {
                $res['RequestLog'] = [];
                $n1 = 0;
                foreach ($this->requestLog as $item1) {
                    $res['RequestLog'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestLog'])) {
            if (!empty($map['RequestLog'])) {
                $model->requestLog = [];
                $n1 = 0;
                foreach ($map['RequestLog'] as $item1) {
                    $model->requestLog[$n1] = requestLog::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

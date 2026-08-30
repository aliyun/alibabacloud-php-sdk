<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDomainAccessLogsResponseBody\accessLogs;

class ListDomainAccessLogsResponseBody extends Model
{
    /**
     * @var accessLogs[]
     */
    public $accessLogs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'accessLogs' => 'AccessLogs',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->accessLogs)) {
            Model::validateArray($this->accessLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLogs) {
            if (\is_array($this->accessLogs)) {
                $res['AccessLogs'] = [];
                $n1 = 0;
                foreach ($this->accessLogs as $item1) {
                    $res['AccessLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['AccessLogs'])) {
            if (!empty($map['AccessLogs'])) {
                $model->accessLogs = [];
                $n1 = 0;
                foreach ($map['AccessLogs'] as $item1) {
                    $model->accessLogs[$n1] = accessLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}

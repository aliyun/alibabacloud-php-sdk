<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\ListCACertificateLogResponseBody\logList;

class ListCACertificateLogResponseBody extends Model
{
    /**
     * @var logList[]
     */
    public $logList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logList' => 'LogList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->logList)) {
            Model::validateArray($this->logList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logList) {
            if (\is_array($this->logList)) {
                $res['LogList'] = [];
                $n1 = 0;
                foreach ($this->logList as $item1) {
                    $res['LogList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LogList'])) {
            if (!empty($map['LogList'])) {
                $model->logList = [];
                $n1 = 0;
                foreach ($map['LogList'] as $item1) {
                    $model->logList[$n1] = logList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

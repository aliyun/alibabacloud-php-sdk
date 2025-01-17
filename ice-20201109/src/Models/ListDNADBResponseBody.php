<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNADBResponseBody\DBList;

class ListDNADBResponseBody extends Model
{
    /**
     * @var DBList[]
     */
    public $DBList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBList'    => 'DBList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DBList)) {
            Model::validateArray($this->DBList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBList) {
            if (\is_array($this->DBList)) {
                $res['DBList'] = [];
                $n1            = 0;
                foreach ($this->DBList as $item1) {
                    $res['DBList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBList'])) {
            if (!empty($map['DBList'])) {
                $model->DBList = [];
                $n1            = 0;
                foreach ($map['DBList'] as $item1) {
                    $model->DBList[$n1++] = DBList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

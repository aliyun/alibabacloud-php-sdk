<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourcesResponseBody\dbList;

class ListDataSourcesResponseBody extends Model
{
    /**
     * @var dbList[]
     */
    public $dbList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dbList' => 'DbList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dbList)) {
            Model::validateArray($this->dbList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbList) {
            if (\is_array($this->dbList)) {
                $res['DbList'] = [];
                $n1 = 0;
                foreach ($this->dbList as $item1) {
                    $res['DbList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DbList'])) {
            if (!empty($map['DbList'])) {
                $model->dbList = [];
                $n1 = 0;
                foreach ($map['DbList'] as $item1) {
                    $model->dbList[$n1] = dbList::fromMap($item1);
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

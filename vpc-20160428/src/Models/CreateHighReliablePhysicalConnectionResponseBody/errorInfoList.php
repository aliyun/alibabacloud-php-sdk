<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\errorInfoList\errorInfoList;

class errorInfoList extends Model
{
    /**
     * @var errorInfoList[]
     */
    public $errorInfoList;
    protected $_name = [
        'errorInfoList' => 'errorInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->errorInfoList)) {
            Model::validateArray($this->errorInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorInfoList) {
            if (\is_array($this->errorInfoList)) {
                $res['errorInfoList'] = [];
                $n1 = 0;
                foreach ($this->errorInfoList as $item1) {
                    $res['errorInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['errorInfoList'])) {
            if (!empty($map['errorInfoList'])) {
                $model->errorInfoList = [];
                $n1 = 0;
                foreach ($map['errorInfoList'] as $item1) {
                    $model->errorInfoList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

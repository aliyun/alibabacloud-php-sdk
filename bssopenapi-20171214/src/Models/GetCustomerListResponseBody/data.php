<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $uidList;
    protected $_name = [
        'uidList' => 'UidList',
    ];

    public function validate()
    {
        if (\is_array($this->uidList)) {
            Model::validateArray($this->uidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uidList) {
            if (\is_array($this->uidList)) {
                $res['UidList'] = [];
                $n1 = 0;
                foreach ($this->uidList as $item1) {
                    $res['UidList'][$n1] = $item1;
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
        if (isset($map['UidList'])) {
            if (!empty($map['UidList'])) {
                $model->uidList = [];
                $n1 = 0;
                foreach ($map['UidList'] as $item1) {
                    $model->uidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

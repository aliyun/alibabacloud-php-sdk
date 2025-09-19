<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetDataTrendResponseBody\data;

use AlibabaCloud\Dara\Model;

class itemList extends Model
{
    /**
     * @var int[]
     */
    public $countList;

    /**
     * @var string
     */
    public $keyName;
    protected $_name = [
        'countList' => 'CountList',
        'keyName' => 'KeyName',
    ];

    public function validate()
    {
        if (\is_array($this->countList)) {
            Model::validateArray($this->countList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->countList) {
            if (\is_array($this->countList)) {
                $res['CountList'] = [];
                $n1 = 0;
                foreach ($this->countList as $item1) {
                    $res['CountList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
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
        if (isset($map['CountList'])) {
            if (!empty($map['CountList'])) {
                $model->countList = [];
                $n1 = 0;
                foreach ($map['CountList'] as $item1) {
                    $model->countList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        return $model;
    }
}

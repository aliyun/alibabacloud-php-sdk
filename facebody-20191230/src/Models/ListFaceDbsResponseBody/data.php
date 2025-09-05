<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceDbsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceDbsResponseBody\data\dbList;

class data extends Model
{
    /**
     * @var dbList[]
     */
    public $dbList;
    protected $_name = [
        'dbList' => 'DbList',
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

        return $model;
    }
}

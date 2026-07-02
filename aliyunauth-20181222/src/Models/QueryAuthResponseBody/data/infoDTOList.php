<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryAuthResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryAuthResponseBody\data\infoDTOList\infoDTOList;

class infoDTOList extends Model
{
    /**
     * @var infoDTOList[]
     */
    public $infoDTOList;
    protected $_name = [
        'infoDTOList' => 'InfoDTOList',
    ];

    public function validate()
    {
        if (\is_array($this->infoDTOList)) {
            Model::validateArray($this->infoDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoDTOList) {
            if (\is_array($this->infoDTOList)) {
                $res['InfoDTOList'] = [];
                $n1 = 0;
                foreach ($this->infoDTOList as $item1) {
                    $res['InfoDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InfoDTOList'])) {
            if (!empty($map['InfoDTOList'])) {
                $model->infoDTOList = [];
                $n1 = 0;
                foreach ($map['InfoDTOList'] as $item1) {
                    $model->infoDTOList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

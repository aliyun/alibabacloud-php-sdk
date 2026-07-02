<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models\AuthenticateResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\AuthenticateResponseBody\data\userInputList\queryAuthRSDTO;

class userInputList extends Model
{
    /**
     * @var queryAuthRSDTO[]
     */
    public $queryAuthRSDTO;
    protected $_name = [
        'queryAuthRSDTO' => 'QueryAuthRSDTO',
    ];

    public function validate()
    {
        if (\is_array($this->queryAuthRSDTO)) {
            Model::validateArray($this->queryAuthRSDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryAuthRSDTO) {
            if (\is_array($this->queryAuthRSDTO)) {
                $res['QueryAuthRSDTO'] = [];
                $n1 = 0;
                foreach ($this->queryAuthRSDTO as $item1) {
                    $res['QueryAuthRSDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QueryAuthRSDTO'])) {
            if (!empty($map['QueryAuthRSDTO'])) {
                $model->queryAuthRSDTO = [];
                $n1 = 0;
                foreach ($map['QueryAuthRSDTO'] as $item1) {
                    $model->queryAuthRSDTO[$n1] = queryAuthRSDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

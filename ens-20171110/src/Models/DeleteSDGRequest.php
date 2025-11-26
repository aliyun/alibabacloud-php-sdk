<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DeleteSDGRequest extends Model
{
    /**
     * @var string[]
     */
    public $SDGId;
    protected $_name = [
        'SDGId' => 'SDGId',
    ];

    public function validate()
    {
        if (\is_array($this->SDGId)) {
            Model::validateArray($this->SDGId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SDGId) {
            if (\is_array($this->SDGId)) {
                $res['SDGId'] = [];
                $n1 = 0;
                foreach ($this->SDGId as $item1) {
                    $res['SDGId'][$n1] = $item1;
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
        if (isset($map['SDGId'])) {
            if (!empty($map['SDGId'])) {
                $model->SDGId = [];
                $n1 = 0;
                foreach ($map['SDGId'] as $item1) {
                    $model->SDGId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

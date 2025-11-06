<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts\contact\addr;

use AlibabaCloud\Dara\Model;

class street extends Model
{
    /**
     * @var string[]
     */
    public $street;
    protected $_name = [
        'street' => 'Street',
    ];

    public function validate()
    {
        if (\is_array($this->street)) {
            Model::validateArray($this->street);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->street) {
            if (\is_array($this->street)) {
                $res['Street'] = [];
                $n1 = 0;
                foreach ($this->street as $item1) {
                    $res['Street'][$n1] = $item1;
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
        if (isset($map['Street'])) {
            if (!empty($map['Street'])) {
                $model->street = [];
                $n1 = 0;
                foreach ($map['Street'] as $item1) {
                    $model->street[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

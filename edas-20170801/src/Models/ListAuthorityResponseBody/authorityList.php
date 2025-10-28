<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList\authority;

class authorityList extends Model
{
    /**
     * @var authority[]
     */
    public $authority;
    protected $_name = [
        'authority' => 'Authority',
    ];

    public function validate()
    {
        if (\is_array($this->authority)) {
            Model::validateArray($this->authority);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authority) {
            if (\is_array($this->authority)) {
                $res['Authority'] = [];
                $n1 = 0;
                foreach ($this->authority as $item1) {
                    $res['Authority'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Authority'])) {
            if (!empty($map['Authority'])) {
                $model->authority = [];
                $n1 = 0;
                foreach ($map['Authority'] as $item1) {
                    $model->authority[$n1] = authority::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

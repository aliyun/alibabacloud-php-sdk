<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList\authority;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authority) {
            $res['Authority'] = [];
            if (null !== $this->authority && \is_array($this->authority)) {
                $n = 0;
                foreach ($this->authority as $item) {
                    $res['Authority'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authority'])) {
            if (!empty($map['Authority'])) {
                $model->authority = [];
                $n                = 0;
                foreach ($map['Authority'] as $item) {
                    $model->authority[$n++] = null !== $item ? authority::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

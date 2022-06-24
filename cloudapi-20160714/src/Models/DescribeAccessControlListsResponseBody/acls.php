<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListsResponseBody\acls\acl;
use AlibabaCloud\Tea\Model;

class acls extends Model
{
    /**
     * @var acl[]
     */
    public $acl;
    protected $_name = [
        'acl' => 'Acl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['Acl'] = [];
            if (null !== $this->acl && \is_array($this->acl)) {
                $n = 0;
                foreach ($this->acl as $item) {
                    $res['Acl'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acl'])) {
            if (!empty($map['Acl'])) {
                $model->acl = [];
                $n          = 0;
                foreach ($map['Acl'] as $item) {
                    $model->acl[$n++] = null !== $item ? acl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListsResponseBody\acls\acl;

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
        if (\is_array($this->acl)) {
            Model::validateArray($this->acl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            if (\is_array($this->acl)) {
                $res['Acl'] = [];
                $n1 = 0;
                foreach ($this->acl as $item1) {
                    $res['Acl'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Acl'])) {
            if (!empty($map['Acl'])) {
                $model->acl = [];
                $n1 = 0;
                foreach ($map['Acl'] as $item1) {
                    $model->acl[$n1++] = acl::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

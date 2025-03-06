<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListAttributeResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys\aclEntry;
use AlibabaCloud\Tea\Model;

class aclEntrys extends Model
{
    /**
     * @var aclEntry[]
     */
    public $aclEntry;
    protected $_name = [
        'aclEntry' => 'AclEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntry) {
            $res['AclEntry'] = [];
            if (null !== $this->aclEntry && \is_array($this->aclEntry)) {
                $n = 0;
                foreach ($this->aclEntry as $item) {
                    $res['AclEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclEntrys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntry'])) {
            if (!empty($map['AclEntry'])) {
                $model->aclEntry = [];
                $n               = 0;
                foreach ($map['AclEntry'] as $item) {
                    $model->aclEntry[$n++] = null !== $item ? aclEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\securityGroupReference;
use AlibabaCloud\Tea\Model;

class securityGroupReferences extends Model
{
    /**
     * @var securityGroupReference[]
     */
    public $securityGroupReference;
    protected $_name = [
        'securityGroupReference' => 'SecurityGroupReference',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupReference) {
            $res['SecurityGroupReference'] = [];
            if (null !== $this->securityGroupReference && \is_array($this->securityGroupReference)) {
                $n = 0;
                foreach ($this->securityGroupReference as $item) {
                    $res['SecurityGroupReference'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupReferences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupReference'])) {
            if (!empty($map['SecurityGroupReference'])) {
                $model->securityGroupReference = [];
                $n = 0;
                foreach ($map['SecurityGroupReference'] as $item) {
                    $model->securityGroupReference[$n++] = null !== $item ? securityGroupReference::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

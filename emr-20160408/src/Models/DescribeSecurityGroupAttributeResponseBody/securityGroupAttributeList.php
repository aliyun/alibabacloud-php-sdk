<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeSecurityGroupAttributeResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeSecurityGroupAttributeResponseBody\securityGroupAttributeList\securityGroupAttribute;
use AlibabaCloud\Tea\Model;

class securityGroupAttributeList extends Model
{
    /**
     * @var securityGroupAttribute[]
     */
    public $securityGroupAttribute;
    protected $_name = [
        'securityGroupAttribute' => 'SecurityGroupAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupAttribute) {
            $res['SecurityGroupAttribute'] = [];
            if (null !== $this->securityGroupAttribute && \is_array($this->securityGroupAttribute)) {
                $n = 0;
                foreach ($this->securityGroupAttribute as $item) {
                    $res['SecurityGroupAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupAttributeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupAttribute'])) {
            if (!empty($map['SecurityGroupAttribute'])) {
                $model->securityGroupAttribute = [];
                $n                             = 0;
                foreach ($map['SecurityGroupAttribute'] as $item) {
                    $model->securityGroupAttribute[$n++] = null !== $item ? securityGroupAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

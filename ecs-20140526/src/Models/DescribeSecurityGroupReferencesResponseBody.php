<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupReferencesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityGroupReferences[]
     */
    public $securityGroupReferences;
    protected $_name = [
        'requestId'               => 'RequestId',
        'securityGroupReferences' => 'SecurityGroupReferences',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroupReferences) {
            $res['SecurityGroupReferences'] = [];
            if (null !== $this->securityGroupReferences && \is_array($this->securityGroupReferences)) {
                $n = 0;
                foreach ($this->securityGroupReferences as $item) {
                    $res['SecurityGroupReferences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupReferencesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupReferences'])) {
            if (!empty($map['SecurityGroupReferences'])) {
                $model->securityGroupReferences = [];
                $n                              = 0;
                foreach ($map['SecurityGroupReferences'] as $item) {
                    $model->securityGroupReferences[$n++] = null !== $item ? securityGroupReferences::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

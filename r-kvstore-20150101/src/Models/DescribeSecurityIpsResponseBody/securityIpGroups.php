<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsResponseBody\securityIpGroups\securityIpGroup;

class securityIpGroups extends Model
{
    /**
     * @var securityIpGroup[]
     */
    public $securityIpGroup;
    protected $_name = [
        'securityIpGroup' => 'SecurityIpGroup',
    ];

    public function validate()
    {
        if (\is_array($this->securityIpGroup)) {
            Model::validateArray($this->securityIpGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityIpGroup) {
            if (\is_array($this->securityIpGroup)) {
                $res['SecurityIpGroup'] = [];
                $n1 = 0;
                foreach ($this->securityIpGroup as $item1) {
                    $res['SecurityIpGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SecurityIpGroup'])) {
            if (!empty($map['SecurityIpGroup'])) {
                $model->securityIpGroup = [];
                $n1 = 0;
                foreach ($map['SecurityIpGroup'] as $item1) {
                    $model->securityIpGroup[$n1++] = securityIpGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

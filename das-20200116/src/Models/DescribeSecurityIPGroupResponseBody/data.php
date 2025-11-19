<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupResponseBody\data\securityIpGroups;

class data extends Model
{
    /**
     * @var securityIpGroups[]
     */
    public $securityIpGroups;
    protected $_name = [
        'securityIpGroups' => 'SecurityIpGroups',
    ];

    public function validate()
    {
        if (\is_array($this->securityIpGroups)) {
            Model::validateArray($this->securityIpGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityIpGroups) {
            if (\is_array($this->securityIpGroups)) {
                $res['SecurityIpGroups'] = [];
                $n1 = 0;
                foreach ($this->securityIpGroups as $item1) {
                    $res['SecurityIpGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SecurityIpGroups'])) {
            if (!empty($map['SecurityIpGroups'])) {
                $model->securityIpGroups = [];
                $n1 = 0;
                foreach ($map['SecurityIpGroups'] as $item1) {
                    $model->securityIpGroups[$n1] = securityIpGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

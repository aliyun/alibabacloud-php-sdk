<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyIPAclConfigRequest;

use AlibabaCloud\Dara\Model;

class IPAclConfig extends Model
{
    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string[]
     */
    public $IPs;
    protected $_name = [
        'aclType' => 'AclType',
        'IPs' => 'IPs',
    ];

    public function validate()
    {
        if (\is_array($this->IPs)) {
            Model::validateArray($this->IPs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }

        if (null !== $this->IPs) {
            if (\is_array($this->IPs)) {
                $res['IPs'] = [];
                $n1 = 0;
                foreach ($this->IPs as $item1) {
                    $res['IPs'][$n1] = $item1;
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
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }

        if (isset($map['IPs'])) {
            if (!empty($map['IPs'])) {
                $model->IPs = [];
                $n1 = 0;
                foreach ($map['IPs'] as $item1) {
                    $model->IPs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

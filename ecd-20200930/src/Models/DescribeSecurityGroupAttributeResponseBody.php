<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeSecurityGroupAttributeResponseBody extends Model
{
    /**
     * @var Permission[]
     */
    public $egressPermissions;

    /**
     * @var Permission[]
     */
    public $ingressPermissions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'egressPermissions' => 'EgressPermissions',
        'ingressPermissions' => 'IngressPermissions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->egressPermissions)) {
            Model::validateArray($this->egressPermissions);
        }
        if (\is_array($this->ingressPermissions)) {
            Model::validateArray($this->ingressPermissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressPermissions) {
            if (\is_array($this->egressPermissions)) {
                $res['EgressPermissions'] = [];
                $n1 = 0;
                foreach ($this->egressPermissions as $item1) {
                    $res['EgressPermissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ingressPermissions) {
            if (\is_array($this->ingressPermissions)) {
                $res['IngressPermissions'] = [];
                $n1 = 0;
                foreach ($this->ingressPermissions as $item1) {
                    $res['IngressPermissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EgressPermissions'])) {
            if (!empty($map['EgressPermissions'])) {
                $model->egressPermissions = [];
                $n1 = 0;
                foreach ($map['EgressPermissions'] as $item1) {
                    $model->egressPermissions[$n1] = Permission::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IngressPermissions'])) {
            if (!empty($map['IngressPermissions'])) {
                $model->ingressPermissions = [];
                $n1 = 0;
                foreach ($map['IngressPermissions'] as $item1) {
                    $model->ingressPermissions[$n1] = Permission::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

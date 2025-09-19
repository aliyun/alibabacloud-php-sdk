<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateOpaStrategyNewShrinkRequest;

use AlibabaCloud\Dara\Model;

class scopes extends Model
{
    /**
     * @var string
     */
    public $ackPolicyInstanceId;

    /**
     * @var int
     */
    public $allNamespace;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $namespaceList;
    protected $_name = [
        'ackPolicyInstanceId' => 'AckPolicyInstanceId',
        'allNamespace' => 'AllNamespace',
        'clusterId' => 'ClusterId',
        'namespaceList' => 'NamespaceList',
    ];

    public function validate()
    {
        if (\is_array($this->namespaceList)) {
            Model::validateArray($this->namespaceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackPolicyInstanceId) {
            $res['AckPolicyInstanceId'] = $this->ackPolicyInstanceId;
        }

        if (null !== $this->allNamespace) {
            $res['AllNamespace'] = $this->allNamespace;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->namespaceList) {
            if (\is_array($this->namespaceList)) {
                $res['NamespaceList'] = [];
                $n1 = 0;
                foreach ($this->namespaceList as $item1) {
                    $res['NamespaceList'][$n1] = $item1;
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
        if (isset($map['AckPolicyInstanceId'])) {
            $model->ackPolicyInstanceId = $map['AckPolicyInstanceId'];
        }

        if (isset($map['AllNamespace'])) {
            $model->allNamespace = $map['AllNamespace'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['NamespaceList'])) {
            if (!empty($map['NamespaceList'])) {
                $model->namespaceList = [];
                $n1 = 0;
                foreach ($map['NamespaceList'] as $item1) {
                    $model->namespaceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

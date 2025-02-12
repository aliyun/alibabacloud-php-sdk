<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefenseObjectsResponseBody;

use AlibabaCloud\Dara\Model;

class objects extends Model
{
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $policyId;
    /**
     * @var string
     */
    public $vip;
    protected $_name = [
        'domain'   => 'Domain',
        'policyId' => 'PolicyId',
        'vip'      => 'Vip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class CreateWebRuleRequest extends Model
{
    /**
     * @var string
     */
    public $defenseId;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $httpsExt;
    /**
     * @var string[]
     */
    public $instanceIds;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var int
     */
    public $rsType;
    /**
     * @var string
     */
    public $rules;
    protected $_name = [
        'defenseId'       => 'DefenseId',
        'domain'          => 'Domain',
        'httpsExt'        => 'HttpsExt',
        'instanceIds'     => 'InstanceIds',
        'resourceGroupId' => 'ResourceGroupId',
        'rsType'          => 'RsType',
        'rules'           => 'Rules',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defenseId) {
            $res['DefenseId'] = $this->defenseId;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->httpsExt) {
            $res['HttpsExt'] = $this->httpsExt;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1                 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }

        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
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
        if (isset($map['DefenseId'])) {
            $model->defenseId = $map['DefenseId'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['HttpsExt'])) {
            $model->httpsExt = $map['HttpsExt'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1                 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }

        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}

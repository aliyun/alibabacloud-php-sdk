<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateBackupPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var mixed[]
     */
    public $policy;
    /**
     * @var string
     */
    public $policyRegionId;
    /**
     * @var string
     */
    public $policyVersion;
    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'name'           => 'Name',
        'policy'         => 'Policy',
        'policyRegionId' => 'PolicyRegionId',
        'policyVersion'  => 'PolicyVersion',
        'uuidList'       => 'UuidList',
    ];

    public function validate()
    {
        if (\is_array($this->policy)) {
            Model::validateArray($this->policy);
        }
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policy) {
            if (\is_array($this->policy)) {
                $res['Policy'] = [];
                foreach ($this->policy as $key1 => $value1) {
                    $res['Policy'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->policyRegionId) {
            $res['PolicyRegionId'] = $this->policyRegionId;
        }

        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }

        if (null !== $this->uuidList) {
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1              = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1++] = $item1;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Policy'])) {
            if (!empty($map['Policy'])) {
                $model->policy = [];
                foreach ($map['Policy'] as $key1 => $value1) {
                    $model->policy[$key1] = $value1;
                }
            }
        }

        if (isset($map['PolicyRegionId'])) {
            $model->policyRegionId = $map['PolicyRegionId'];
        }

        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }

        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = [];
                $n1              = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

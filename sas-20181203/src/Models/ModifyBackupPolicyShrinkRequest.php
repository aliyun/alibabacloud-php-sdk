<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyBackupPolicyShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $policyShrink;
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
        'id'             => 'Id',
        'name'           => 'Name',
        'policyShrink'   => 'Policy',
        'policyRegionId' => 'PolicyRegionId',
        'policyVersion'  => 'PolicyVersion',
        'uuidList'       => 'UuidList',
    ];

    public function validate()
    {
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policyShrink) {
            $res['Policy'] = $this->policyShrink;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Policy'])) {
            $model->policyShrink = $map['Policy'];
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

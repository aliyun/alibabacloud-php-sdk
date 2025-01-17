<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class InstallBackupClientRequest extends Model
{
    /**
     * @var string
     */
    public $policyVersion;
    /**
     * @var string
     */
    public $uuid;
    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'policyVersion' => 'PolicyVersion',
        'uuid'          => 'Uuid',
        'uuidList'      => 'UuidList',
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
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
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

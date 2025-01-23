<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class UninstallBackupClientsRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $clientIds;
    /**
     * @var string
     */
    public $crossAccountRoleName;
    /**
     * @var string
     */
    public $crossAccountType;
    /**
     * @var int
     */
    public $crossAccountUserId;
    /**
     * @var mixed[]
     */
    public $instanceIds;
    protected $_name = [
        'clientIds'            => 'ClientIds',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'instanceIds'          => 'InstanceIds',
    ];

    public function validate()
    {
        if (\is_array($this->clientIds)) {
            Model::validateArray($this->clientIds);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIds) {
            if (\is_array($this->clientIds)) {
                $res['ClientIds'] = [];
                foreach ($this->clientIds as $key1 => $value1) {
                    $res['ClientIds'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }

        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }

        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                foreach ($this->instanceIds as $key1 => $value1) {
                    $res['InstanceIds'][$key1] = $value1;
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
        if (isset($map['ClientIds'])) {
            if (!empty($map['ClientIds'])) {
                $model->clientIds = [];
                foreach ($map['ClientIds'] as $key1 => $value1) {
                    $model->clientIds[$key1] = $value1;
                }
            }
        }

        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }

        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }

        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                foreach ($map['InstanceIds'] as $key1 => $value1) {
                    $model->instanceIds[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

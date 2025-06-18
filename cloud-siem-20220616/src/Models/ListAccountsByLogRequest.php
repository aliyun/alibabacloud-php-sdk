<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;

class ListAccountsByLogRequest extends Model
{
    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var string[]
     */
    public $logCodes;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;
    protected $_name = [
        'cloudCode' => 'CloudCode',
        'logCodes' => 'LogCodes',
        'prodCode' => 'ProdCode',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
    ];

    public function validate()
    {
        if (\is_array($this->logCodes)) {
            Model::validateArray($this->logCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }

        if (null !== $this->logCodes) {
            if (\is_array($this->logCodes)) {
                $res['LogCodes'] = [];
                $n1 = 0;
                foreach ($this->logCodes as $item1) {
                    $res['LogCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }

        if (isset($map['LogCodes'])) {
            if (!empty($map['LogCodes'])) {
                $model->logCodes = [];
                $n1 = 0;
                foreach ($map['LogCodes'] as $item1) {
                    $model->logCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}

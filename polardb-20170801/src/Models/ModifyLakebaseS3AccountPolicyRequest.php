<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyLakebaseS3AccountPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $pfsInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $userAccAk;

    /**
     * @var string
     */
    public $userAccPolicy;
    protected $_name = [
        'pfsInstanceId' => 'PfsInstanceId',
        'regionId' => 'RegionId',
        'userAccAk' => 'UserAccAk',
        'userAccPolicy' => 'UserAccPolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pfsInstanceId) {
            $res['PfsInstanceId'] = $this->pfsInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->userAccAk) {
            $res['UserAccAk'] = $this->userAccAk;
        }

        if (null !== $this->userAccPolicy) {
            $res['UserAccPolicy'] = $this->userAccPolicy;
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
        if (isset($map['PfsInstanceId'])) {
            $model->pfsInstanceId = $map['PfsInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UserAccAk'])) {
            $model->userAccAk = $map['UserAccAk'];
        }

        if (isset($map['UserAccPolicy'])) {
            $model->userAccPolicy = $map['UserAccPolicy'];
        }

        return $model;
    }
}

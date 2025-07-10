<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ResetSupabaseProjectPasswordRequest extends Model
{
    /**
     * @var string
     */
    public $accountPassword;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountPassword' => 'AccountPassword',
        'projectId' => 'ProjectId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

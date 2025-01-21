<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class CreateAlertContactGroupRequest extends Model
{
    /**
     * @var string
     */
    public $contactGroupName;
    /**
     * @var string
     */
    public $contactIds;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'contactIds'       => 'ContactIds',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }

        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
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
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }

        if (isset($map['ContactIds'])) {
            $model->contactIds = $map['ContactIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

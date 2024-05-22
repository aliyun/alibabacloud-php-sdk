<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyVSwitchAttributeRequest extends Model
{
    /**
     * @description The description of the vSwitch.
     *
     *   The description must be 2 to 256 characters in length.
     *   The description cannot start with http:// or https://.
     *
     * @example this is my first network
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the vSwitch.
     *
     * This parameter is required.
     * @example n-****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the vSwitch.
     *
     *   The name must be 2 to 128 characters in length.
     *   The name must start with a letter and cannot start with http:// or https://.
     *
     * @example Test-switch
     *
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'description' => 'Description',
        'vSwitchId'   => 'VSwitchId',
        'vSwitchName' => 'VSwitchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVSwitchAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }

        return $model;
    }
}

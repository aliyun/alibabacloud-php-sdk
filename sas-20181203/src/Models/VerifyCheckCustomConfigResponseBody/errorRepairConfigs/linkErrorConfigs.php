<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigResponseBody\errorRepairConfigs;

use AlibabaCloud\Tea\Model;

class linkErrorConfigs extends Model
{
    /**
     * @description Name of the check item\\"s configuration, unique within the same check item.
     *
     * @example IpList
     *
     * @var string
     */
    public $name;

    /**
     * @description Display name of the user\\"s check configuration.
     *
     * @example Ip List
     *
     * @var string
     */
    public $showName;

    /**
     * @description The type of the parameter that caused the error:
     * - custom: Custom configuration parameter
     * @example custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'     => 'Name',
        'showName' => 'ShowName',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return linkErrorConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

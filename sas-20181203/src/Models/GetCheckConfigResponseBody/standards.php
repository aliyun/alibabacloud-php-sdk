<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckConfigResponseBody;

use AlibabaCloud\Tea\Model;

class standards extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the check item.
     *
     * @example Cloud service configuration management
     *
     * @var string
     */
    public $showName;

    /**
     * @description The status of the check item. Valid values:
     *
     *   **ON**: enabled
     *   **OFF**: disabled
     *
     * @example ON
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the check item. Valid values:
     *
     *   **RISK**: cloud service configuration management
     *   **IDENTITY_PERMISSION**: identity and permission management
     *   **COMPLIANCE**: compliance
     *
     * @example RISK
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'       => 'Id',
        'showName' => 'ShowName',
        'status'   => 'Status',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

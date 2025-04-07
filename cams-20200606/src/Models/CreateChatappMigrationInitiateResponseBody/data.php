<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappMigrationInitiateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the mobile number.
     *
     * @example 82828893332
     *
     * @var string
     */
    public $id;

    /**
     * @description The mobile number.
     *
     * @example 8613900001234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The state of the mobile number. Only MIGRATING may be returned, which indicates that the mobile number is being migrated.
     *
     * @example MIGRATING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'id' => 'Id',
        'phoneNumber' => 'PhoneNumber',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

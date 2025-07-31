<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteRowPermissionRequest;

use AlibabaCloud\Tea\Model;

class deleteRowPermissionCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 300001234
     *
     * @var int
     */
    public $rowPermissionId;
    protected $_name = [
        'rowPermissionId' => 'RowPermissionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowPermissionId) {
            $res['RowPermissionId'] = $this->rowPermissionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deleteRowPermissionCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowPermissionId'])) {
            $model->rowPermissionId = $map['RowPermissionId'];
        }

        return $model;
    }
}

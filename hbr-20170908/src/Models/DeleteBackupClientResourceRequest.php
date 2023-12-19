<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeleteBackupClientResourceRequest extends Model
{
    /**
     * @description The IDs of HBR clients. You can specify a maximum of 100 client IDs.
     *
     * @example ["c-*********************"]
     *
     * @var mixed[]
     */
    public $clientIds;
    protected $_name = [
        'clientIds' => 'ClientIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIds) {
            $res['ClientIds'] = $this->clientIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBackupClientResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIds'])) {
            $model->clientIds = $map['ClientIds'];
        }

        return $model;
    }
}

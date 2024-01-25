<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeleteBackupClientResourceRequest extends Model
{
    /**
     * @description The IDs of HBR clients. The value can be a JSON array that consists of up to 100 client IDs. Separate the IDs with commas (,).
     *
     * @example ["c-0007kyu045r0********", "c-000b6818umvo********"]
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

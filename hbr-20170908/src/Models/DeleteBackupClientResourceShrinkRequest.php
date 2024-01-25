<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeleteBackupClientResourceShrinkRequest extends Model
{
    /**
     * @description The IDs of HBR clients. The value can be a JSON array that consists of up to 100 client IDs. Separate the IDs with commas (,).
     *
     * @example ["c-0007kyu045r0********", "c-000b6818umvo********"]
     *
     * @var string
     */
    public $clientIdsShrink;
    protected $_name = [
        'clientIdsShrink' => 'ClientIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIdsShrink) {
            $res['ClientIds'] = $this->clientIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBackupClientResourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIds'])) {
            $model->clientIdsShrink = $map['ClientIds'];
        }

        return $model;
    }
}

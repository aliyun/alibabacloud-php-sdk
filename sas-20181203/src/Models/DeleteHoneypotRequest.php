<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteHoneypotRequest extends Model
{
    /**
     * @example 558b5fa40948ebe2171a74757c54dc7e58f761870fa7ee6a105e70947ec82aa9
     *
     * @var string
     */
    public $honeypotId;
    protected $_name = [
        'honeypotId' => 'HoneypotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHoneypotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }

        return $model;
    }
}

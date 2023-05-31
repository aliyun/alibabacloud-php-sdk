<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteHoneypotRequest extends Model
{
    /**
     * @description The ID of the honeypot.
     *
     * > You can call the [ListHoneypot](~~ListHoneypot~~) operation to query the IDs of honeypots.
     * @example 558b5fa40948ebe2171a74757c54dc7e58f761870fa7ee6a105e70947ec82aa9
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'honeypotId' => 'HoneypotId',
        'lang'       => 'Lang',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}

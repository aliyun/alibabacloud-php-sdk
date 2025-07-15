<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\KeepaliveIntlResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $result;
    protected $_name = [
        'result' => 'Result',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}

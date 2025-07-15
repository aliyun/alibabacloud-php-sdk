<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\RemoveTerminalsResponseBody;

use AlibabaCloud\Tea\Model;

class terminals extends Model
{
    /**
     * @description The returned status code. A value of 0 indicates that the request is successful. If the request fails, an error message is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The ID of the user.
     *
     * @example 1811****
     *
     * @var string
     */
    public $id;

    /**
     * @description The result of removing the specified users from the channel. Valid values:
     *
     *   Success
     *   Failed
     *
     * @example Success
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'id' => 'Id',
        'message' => 'Message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terminals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}

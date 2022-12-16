<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigResponseBody;

use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @description IP.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The verification string.
     *
     * @example 23sdfdf
     *
     * @var string
     */
    public $md5;

    /**
     * @description The status.
     *
     * @example beta
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ip'     => 'Ip',
        'md5'    => 'Md5',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

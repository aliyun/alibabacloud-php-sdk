<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceSignedUrlRequest extends Model
{
    /**
     * @description The period of time for which the URL expires.
     *
     * @example 43200
     *
     * @var int
     */
    public $expire;

    /**
     * @description Specifies whether to use the VPC connection.
     *
     * @example false
     *
     * @var bool
     */
    public $internal;

    /**
     * @description The page type.
     *
     * Valid values:
     *
     *   webview
     *   monitor
     *
     * @example webview
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'expire' => 'Expire',
        'internal' => 'Internal',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->internal) {
            $res['Internal'] = $this->internal;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceSignedUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Internal'])) {
            $model->internal = $map['Internal'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

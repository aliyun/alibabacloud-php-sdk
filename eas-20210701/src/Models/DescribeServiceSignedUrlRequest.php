<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DescribeServiceSignedUrlRequest extends Model
{
    /**
     * @var int
     */
    public $expire;
    /**
     * @var bool
     */
    public $internal;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'expire'   => 'Expire',
        'internal' => 'Internal',
        'type'     => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

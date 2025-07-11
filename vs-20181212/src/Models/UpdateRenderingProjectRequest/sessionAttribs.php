<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingProjectRequest;

use AlibabaCloud\Tea\Model;

class sessionAttribs extends Model
{
    /**
     * @example Async
     *
     * @var string
     */
    public $startMode;
    protected $_name = [
        'startMode' => 'StartMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->startMode) {
            $res['StartMode'] = $this->startMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessionAttribs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartMode'])) {
            $model->startMode = $map['StartMode'];
        }

        return $model;
    }
}

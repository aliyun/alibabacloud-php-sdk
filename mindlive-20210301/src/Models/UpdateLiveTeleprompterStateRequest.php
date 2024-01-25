<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveTeleprompterStateRequest extends Model
{
    /**
     * @var bool
     */
    public $display;
    protected $_name = [
        'display' => 'Display',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveTeleprompterStateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }

        return $model;
    }
}

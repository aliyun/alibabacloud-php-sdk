<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateFunctionHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description code checksum
     *
     * @var string
     */
    public $xFcCodeChecksum;
    protected $_name = [
        'xFcCodeChecksum' => 'x-fc-code-checksum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xFcCodeChecksum) {
            $res['x-fc-code-checksum'] = $this->xFcCodeChecksum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFunctionHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-fc-code-checksum'])) {
            $model->xFcCodeChecksum = $map['x-fc-code-checksum'];
        }

        return $model;
    }
}

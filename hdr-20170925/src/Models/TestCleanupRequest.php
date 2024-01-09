<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class TestCleanupRequest extends Model
{
    /**
     * @example sr-000cvyfewfi6fzi9zoql
     *
     * @var string
     */
    public $serverId;
    protected $_name = [
        'serverId' => 'ServerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestCleanupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}

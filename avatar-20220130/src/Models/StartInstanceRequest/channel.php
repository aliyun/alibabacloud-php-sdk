<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceRequest;

use AlibabaCloud\Tea\Model;

class channel extends Model
{
    /**
     * @var mixed[]
     */
    public $reqConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'reqConfig' => 'ReqConfig',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqConfig) {
            $res['ReqConfig'] = $this->reqConfig;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReqConfig'])) {
            $model->reqConfig = $map['ReqConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

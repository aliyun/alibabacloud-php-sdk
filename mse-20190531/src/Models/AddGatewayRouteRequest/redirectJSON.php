<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest;

use AlibabaCloud\Tea\Model;

class redirectJSON extends Model
{
    /**
     * @description The return code.
     *
     * @example 302
     *
     * @var int
     */
    public $code;

    /**
     * @description The hostname to be redirected to.
     *
     * @example test.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The path to be redirected to.
     *
     * @example /test
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'code' => 'Code',
        'host' => 'Host',
        'path' => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redirectJSON
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}

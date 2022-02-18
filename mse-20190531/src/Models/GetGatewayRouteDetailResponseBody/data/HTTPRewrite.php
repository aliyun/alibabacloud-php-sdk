<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class HTTPRewrite extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $pathType;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $substitution;
    protected $_name = [
        'host'         => 'Host',
        'path'         => 'Path',
        'pathType'     => 'PathType',
        'pattern'      => 'Pattern',
        'status'       => 'Status',
        'substitution' => 'Substitution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->substitution) {
            $res['Substitution'] = $this->substitution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HTTPRewrite
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Substitution'])) {
            $model->substitution = $map['Substitution'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DescribeCcRouteRulesRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $bizId;

    /**
     * @var string
     */
    public $routeComment;

    /**
     * @var string
     */
    public $routeId;

    /**
     * @var string
     */
    public $routeIp;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'lang'         => 'Lang',
        'bizId'        => 'BizId',
        'routeComment' => 'RouteComment',
        'routeId'      => 'RouteId',
        'routeIp'      => 'RouteIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->routeComment) {
            $res['RouteComment'] = $this->routeComment;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }
        if (null !== $this->routeIp) {
            $res['RouteIp'] = $this->routeIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcRouteRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['RouteComment'])) {
            $model->routeComment = $map['RouteComment'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }
        if (isset($map['RouteIp'])) {
            $model->routeIp = $map['RouteIp'];
        }

        return $model;
    }
}

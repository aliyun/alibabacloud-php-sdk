<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RescaleApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $rescaleType;

    /**
     * @var string
     */
    public $rescaleLevel;

    /**
     * @var string
     */
    public $resourceSelector;

    /**
     * @var string
     */
    public $toAppVersion;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'            => 'AppId',
        'rescaleType'      => 'RescaleType',
        'rescaleLevel'     => 'RescaleLevel',
        'resourceSelector' => 'ResourceSelector',
        'toAppVersion'     => 'ToAppVersion',
        'timeout'          => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->rescaleType) {
            $res['RescaleType'] = $this->rescaleType;
        }
        if (null !== $this->rescaleLevel) {
            $res['RescaleLevel'] = $this->rescaleLevel;
        }
        if (null !== $this->resourceSelector) {
            $res['ResourceSelector'] = $this->resourceSelector;
        }
        if (null !== $this->toAppVersion) {
            $res['ToAppVersion'] = $this->toAppVersion;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RescaleApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RescaleType'])) {
            $model->rescaleType = $map['RescaleType'];
        }
        if (isset($map['RescaleLevel'])) {
            $model->rescaleLevel = $map['RescaleLevel'];
        }
        if (isset($map['ResourceSelector'])) {
            $model->resourceSelector = $map['ResourceSelector'];
        }
        if (isset($map['ToAppVersion'])) {
            $model->toAppVersion = $map['ToAppVersion'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}

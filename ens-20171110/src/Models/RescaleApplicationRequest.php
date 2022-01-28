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
    public $rescaleLevel;

    /**
     * @var string
     */
    public $rescaleType;

    /**
     * @var string
     */
    public $resourceSelector;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $toAppVersion;
    protected $_name = [
        'appId'            => 'AppId',
        'rescaleLevel'     => 'RescaleLevel',
        'rescaleType'      => 'RescaleType',
        'resourceSelector' => 'ResourceSelector',
        'timeout'          => 'Timeout',
        'toAppVersion'     => 'ToAppVersion',
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
        if (null !== $this->rescaleLevel) {
            $res['RescaleLevel'] = $this->rescaleLevel;
        }
        if (null !== $this->rescaleType) {
            $res['RescaleType'] = $this->rescaleType;
        }
        if (null !== $this->resourceSelector) {
            $res['ResourceSelector'] = $this->resourceSelector;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->toAppVersion) {
            $res['ToAppVersion'] = $this->toAppVersion;
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
        if (isset($map['RescaleLevel'])) {
            $model->rescaleLevel = $map['RescaleLevel'];
        }
        if (isset($map['RescaleType'])) {
            $model->rescaleType = $map['RescaleType'];
        }
        if (isset($map['ResourceSelector'])) {
            $model->resourceSelector = $map['ResourceSelector'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['ToAppVersion'])) {
            $model->toAppVersion = $map['ToAppVersion'];
        }

        return $model;
    }
}

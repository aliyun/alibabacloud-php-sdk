<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20220307\Models;

use AlibabaCloud\Tea\Model;

class GenerateCoordinationCodeRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $loginRegionId;

    /**
     * @example v2c4e2ef03d62******
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example ecd-68a7ddrt0******
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example demo-desktop
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @example CloudDesktop
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 09e2b2e6-3181******
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'loginRegionId'    => 'LoginRegionId',
        'loginToken'       => 'LoginToken',
        'resourceId'       => 'ResourceId',
        'resourceName'     => 'ResourceName',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType'     => 'ResourceType',
        'sessionId'        => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginRegionId) {
            $res['LoginRegionId'] = $this->loginRegionId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateCoordinationCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginRegionId'])) {
            $model->loginRegionId = $map['LoginRegionId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}

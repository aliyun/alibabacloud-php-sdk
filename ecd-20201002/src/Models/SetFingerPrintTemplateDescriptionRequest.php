<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class SetFingerPrintTemplateDescriptionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0764064c-1609-4d3c-8cb7-ab8d3feg****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 40401e62-5caf-4508-8de7-bf98af12****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example Finger 1
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description This parameter is required.
     *
     * @example v14e5a2404c495249f7541646535779667ea0b5d87754b5d2d2a3099bda774f3832e24756ef3e66eb574b1f3e99078****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example d28520d4-da0b-4a97-981d-683db865****
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'clientId'    => 'ClientId',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'index'       => 'Index',
        'loginToken'  => 'LoginToken',
        'regionId'    => 'RegionId',
        'sessionId'   => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetFingerPrintTemplateDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}

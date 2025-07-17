<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDifyAttributeRequest extends Model
{
    /**
     * @example 92748163-af62-4ca4-ad85-1****
     *
     * @var string
     */
    public $appUuid;

    /**
     * @example ETnLKlblzczshOTUbOCzxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $dataRegion;

    /**
     * @example 339170706****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appUuid' => 'AppUuid',
        'clientToken' => 'ClientToken',
        'dataRegion' => 'DataRegion',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUuid) {
            $res['AppUuid'] = $this->appUuid;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDifyAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUuid'])) {
            $model->appUuid = $map['AppUuid'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

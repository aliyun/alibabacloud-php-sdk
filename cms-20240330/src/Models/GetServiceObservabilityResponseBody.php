<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityResponseBody\entryPointInfo;
use AlibabaCloud\Tea\Model;

class GetServiceObservabilityResponseBody extends Model
{
    /**
     * @var entryPointInfo
     */
    public $entryPointInfo;

    /**
     * @var string
     */
    public $feeType;

    /**
     * @var string[]
     */
    public $quotas;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 4852B9B5-345C-5CBC-A15F-786D83ECCBBA
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $settings;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example apm
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'entryPointInfo' => 'entryPointInfo',
        'feeType' => 'feeType',
        'quotas' => 'quotas',
        'regionId' => 'regionId',
        'requestId' => 'requestId',
        'settings' => 'settings',
        'status' => 'status',
        'type' => 'type',
        'workspace' => 'workspace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->entryPointInfo) {
            $res['entryPointInfo'] = null !== $this->entryPointInfo ? $this->entryPointInfo->toMap() : null;
        }
        if (null !== $this->feeType) {
            $res['feeType'] = $this->feeType;
        }
        if (null !== $this->quotas) {
            $res['quotas'] = $this->quotas;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceObservabilityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entryPointInfo'])) {
            $model->entryPointInfo = entryPointInfo::fromMap($map['entryPointInfo']);
        }
        if (isset($map['feeType'])) {
            $model->feeType = $map['feeType'];
        }
        if (isset($map['quotas'])) {
            $model->quotas = $map['quotas'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}

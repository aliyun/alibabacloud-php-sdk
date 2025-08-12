<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceObservabilityResponseBody\entryPointInfo;

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
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $settings;

    /**
     * @var string
     */
    public $status;

    /**
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

    public function validate()
    {
        if (null !== $this->entryPointInfo) {
            $this->entryPointInfo->validate();
        }
        if (\is_array($this->quotas)) {
            Model::validateArray($this->quotas);
        }
        if (\is_array($this->settings)) {
            Model::validateArray($this->settings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entryPointInfo) {
            $res['entryPointInfo'] = null !== $this->entryPointInfo ? $this->entryPointInfo->toArray($noStream) : $this->entryPointInfo;
        }

        if (null !== $this->feeType) {
            $res['feeType'] = $this->feeType;
        }

        if (null !== $this->quotas) {
            if (\is_array($this->quotas)) {
                $res['quotas'] = [];
                foreach ($this->quotas as $key1 => $value1) {
                    $res['quotas'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->settings) {
            if (\is_array($this->settings)) {
                $res['settings'] = [];
                foreach ($this->settings as $key1 => $value1) {
                    $res['settings'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['quotas'])) {
                $model->quotas = [];
                foreach ($map['quotas'] as $key1 => $value1) {
                    $model->quotas[$key1] = $value1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['settings'])) {
            if (!empty($map['settings'])) {
                $model->settings = [];
                foreach ($map['settings'] as $key1 => $value1) {
                    $model->settings[$key1] = $value1;
                }
            }
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

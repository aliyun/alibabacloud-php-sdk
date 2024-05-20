<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchRequest;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchRequest\appInfos\resultStore;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchRequest\appInfos\startParameters;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchRequest\appInfos\systemInfo;
use AlibabaCloud\Tea\Model;

class appInfos extends Model
{
    /**
     * @var string
     */
    public $adapterFileId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $customUserId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $customerSessionId;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $districtId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var resultStore
     */
    public $resultStore;

    /**
     * @var startParameters[]
     */
    public $startParameters;

    /**
     * @var systemInfo[]
     */
    public $systemInfo;
    protected $_name = [
        'adapterFileId'     => 'AdapterFileId',
        'appId'             => 'AppId',
        'appVersion'        => 'AppVersion',
        'clientIp'          => 'ClientIp',
        'customUserId'      => 'CustomUserId',
        'customerSessionId' => 'CustomerSessionId',
        'datasetId'         => 'DatasetId',
        'districtId'        => 'DistrictId',
        'projectId'         => 'ProjectId',
        'resultStore'       => 'ResultStore',
        'startParameters'   => 'StartParameters',
        'systemInfo'        => 'SystemInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adapterFileId) {
            $res['AdapterFileId'] = $this->adapterFileId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->customUserId) {
            $res['CustomUserId'] = $this->customUserId;
        }
        if (null !== $this->customerSessionId) {
            $res['CustomerSessionId'] = $this->customerSessionId;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resultStore) {
            $res['ResultStore'] = null !== $this->resultStore ? $this->resultStore->toMap() : null;
        }
        if (null !== $this->startParameters) {
            $res['StartParameters'] = [];
            if (null !== $this->startParameters && \is_array($this->startParameters)) {
                $n = 0;
                foreach ($this->startParameters as $item) {
                    $res['StartParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = [];
            if (null !== $this->systemInfo && \is_array($this->systemInfo)) {
                $n = 0;
                foreach ($this->systemInfo as $item) {
                    $res['SystemInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdapterFileId'])) {
            $model->adapterFileId = $map['AdapterFileId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['CustomUserId'])) {
            $model->customUserId = $map['CustomUserId'];
        }
        if (isset($map['CustomerSessionId'])) {
            $model->customerSessionId = $map['CustomerSessionId'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResultStore'])) {
            $model->resultStore = resultStore::fromMap($map['ResultStore']);
        }
        if (isset($map['StartParameters'])) {
            if (!empty($map['StartParameters'])) {
                $model->startParameters = [];
                $n                      = 0;
                foreach ($map['StartParameters'] as $item) {
                    $model->startParameters[$n++] = null !== $item ? startParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SystemInfo'])) {
            if (!empty($map['SystemInfo'])) {
                $model->systemInfo = [];
                $n                 = 0;
                foreach ($map['SystemInfo'] as $item) {
                    $model->systemInfo[$n++] = null !== $item ? systemInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

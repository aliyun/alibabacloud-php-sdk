<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class ListMgsApiRequest extends Model
{
    /**
     * @var string
     */
    public $apiStatus;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $needEncrypt;

    /**
     * @var string
     */
    public $needEtag;

    /**
     * @var string
     */
    public $needSign;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $optFuzzy;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $sysId;

    /**
     * @var string
     */
    public $sysName;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiStatus'     => 'ApiStatus',
        'apiType'       => 'ApiType',
        'appId'         => 'AppId',
        'format'        => 'Format',
        'host'          => 'Host',
        'needEncrypt'   => 'NeedEncrypt',
        'needEtag'      => 'NeedEtag',
        'needSign'      => 'NeedSign',
        'operationType' => 'OperationType',
        'optFuzzy'      => 'OptFuzzy',
        'pageIndex'     => 'PageIndex',
        'pageSize'      => 'PageSize',
        'sysId'         => 'SysId',
        'sysName'       => 'SysName',
        'tenantId'      => 'TenantId',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->needEncrypt) {
            $res['NeedEncrypt'] = $this->needEncrypt;
        }
        if (null !== $this->needEtag) {
            $res['NeedEtag'] = $this->needEtag;
        }
        if (null !== $this->needSign) {
            $res['NeedSign'] = $this->needSign;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->optFuzzy) {
            $res['OptFuzzy'] = $this->optFuzzy;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sysId) {
            $res['SysId'] = $this->sysId;
        }
        if (null !== $this->sysName) {
            $res['SysName'] = $this->sysName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMgsApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['NeedEncrypt'])) {
            $model->needEncrypt = $map['NeedEncrypt'];
        }
        if (isset($map['NeedEtag'])) {
            $model->needEtag = $map['NeedEtag'];
        }
        if (isset($map['NeedSign'])) {
            $model->needSign = $map['NeedSign'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['OptFuzzy'])) {
            $model->optFuzzy = $map['OptFuzzy'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SysId'])) {
            $model->sysId = $map['SysId'];
        }
        if (isset($map['SysName'])) {
            $model->sysName = $map['SysName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ImportOASRequest extends Model
{
    /**
     * @description The security authentication method of the API. Valid values:
     *
     *   **APP: Only authorized applications can call the API.**
     *
     *   **ANONYMOUS: The API can be anonymously called. In this mode, you must take note of the following rules:**
     *
     *   All users who have obtained the API service information can call this API. API Gateway does not authenticate callers and cannot set user-specific throttling policies. If you make this API public, set API-specific throttling policies.
     *
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @description The name of the backend service.
     *
     * @example testBackendService
     *
     * @var string
     */
    public $backendName;

    /**
     * @description The OAS-compliant text file or OSS object URL.
     *
     * @example swagger: "2.0"
     * - "sold"
     * @var string
     */
    public $data;

    /**
     * @description The ID of the API group.
     *
     * @example 08ae4aa0f95e4321849ee57f4e0b3077
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Specifies whether to ignore alerts.
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreWarning;

    /**
     * @description The OAS version.
     *
     * @example OAS2
     *
     * @var string
     */
    public $OASVersion;

    /**
     * @description Specifies whether to overwrite an existing API.
     *
     * If an existing API has the same HTTP request type and backend request path as the API to be imported, the existing API is overwritten.
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description The request mode. Valid values:
     *
     *   MAPPING: Parameters are mapped. Unknown parameters are filtered out.
     *   PASSTHROUGH: Parameters are passed through.
     *
     * @example PASSTHROUGH
     *
     * @var string
     */
    public $requestMode;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description Specifies whether to directly import the API without performing a precheck.
     *
     * @example true
     *
     * @var bool
     */
    public $skipDryRun;
    protected $_name = [
        'authType'      => 'AuthType',
        'backendName'   => 'BackendName',
        'data'          => 'Data',
        'groupId'       => 'GroupId',
        'ignoreWarning' => 'IgnoreWarning',
        'OASVersion'    => 'OASVersion',
        'overwrite'     => 'Overwrite',
        'requestMode'   => 'RequestMode',
        'securityToken' => 'SecurityToken',
        'skipDryRun'    => 'SkipDryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ignoreWarning) {
            $res['IgnoreWarning'] = $this->ignoreWarning;
        }
        if (null !== $this->OASVersion) {
            $res['OASVersion'] = $this->OASVersion;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->requestMode) {
            $res['RequestMode'] = $this->requestMode;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->skipDryRun) {
            $res['SkipDryRun'] = $this->skipDryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportOASRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IgnoreWarning'])) {
            $model->ignoreWarning = $map['IgnoreWarning'];
        }
        if (isset($map['OASVersion'])) {
            $model->OASVersion = $map['OASVersion'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['RequestMode'])) {
            $model->requestMode = $map['RequestMode'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SkipDryRun'])) {
            $model->skipDryRun = $map['SkipDryRun'];
        }

        return $model;
    }
}

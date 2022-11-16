<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ImportOASRequest extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $backendName;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $ignoreWarning;

    /**
     * @var string
     */
    public $OASVersion;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $requestMode;

    /**
     * @var string
     */
    public $securityToken;

    /**
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

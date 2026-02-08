<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileSummaryInfoResponseBody\module;

class QueryMaterialFileSummaryInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var bool
     */
    public $allowRetry;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $dynamicCode;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var mixed[]
     */
    public $errorArgs;

    /**
     * @var module
     */
    public $module;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rootErrorCode;

    /**
     * @var string
     */
    public $rootErrorMsg;

    /**
     * @var bool
     */
    public $synchro;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'allowRetry' => 'AllowRetry',
        'appName' => 'AppName',
        'dynamicCode' => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errorArgs' => 'ErrorArgs',
        'module' => 'Module',
        'requestId' => 'RequestId',
        'rootErrorCode' => 'RootErrorCode',
        'rootErrorMsg' => 'RootErrorMsg',
        'synchro' => 'Synchro',
    ];

    public function validate()
    {
        if (\is_array($this->errorArgs)) {
            Model::validateArray($this->errorArgs);
        }
        if (null !== $this->module) {
            $this->module->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->allowRetry) {
            $res['AllowRetry'] = $this->allowRetry;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }

        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }

        if (null !== $this->errorArgs) {
            if (\is_array($this->errorArgs)) {
                $res['ErrorArgs'] = [];
                $n1 = 0;
                foreach ($this->errorArgs as $item1) {
                    $res['ErrorArgs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->module) {
            $res['Module'] = null !== $this->module ? $this->module->toArray($noStream) : $this->module;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rootErrorCode) {
            $res['RootErrorCode'] = $this->rootErrorCode;
        }

        if (null !== $this->rootErrorMsg) {
            $res['RootErrorMsg'] = $this->rootErrorMsg;
        }

        if (null !== $this->synchro) {
            $res['Synchro'] = $this->synchro;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['AllowRetry'])) {
            $model->allowRetry = $map['AllowRetry'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }

        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }

        if (isset($map['ErrorArgs'])) {
            if (!empty($map['ErrorArgs'])) {
                $model->errorArgs = [];
                $n1 = 0;
                foreach ($map['ErrorArgs'] as $item1) {
                    $model->errorArgs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Module'])) {
            $model->module = module::fromMap($map['Module']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RootErrorCode'])) {
            $model->rootErrorCode = $map['RootErrorCode'];
        }

        if (isset($map['RootErrorMsg'])) {
            $model->rootErrorMsg = $map['RootErrorMsg'];
        }

        if (isset($map['Synchro'])) {
            $model->synchro = $map['Synchro'];
        }

        return $model;
    }
}

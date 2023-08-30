<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data\result\authRule;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 19039813784***
     *
     * @var string
     */
    public $accountId;

    /**
     * @example hkhon1po62@5f1b08becb*****
     *
     * @var string
     */
    public $appId;

    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @var authRule[]
     */
    public $authRule;

    /**
     * @example 0
     *
     * @var int
     */
    public $authType;

    /**
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @description ID。
     *
     * @example 204
     *
     * @var int
     */
    public $id;

    /**
     * @example c19c6c500e1ff4d7abc7bed9b8236***
     *
     * @var string
     */
    public $k8sNamespace;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example ced54a95-4e33-4bda-be7e-37e95868***
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example SPRING_CLOUD
     *
     * @var string
     */
    public $protocol;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example edasmsc
     *
     * @var string
     */
    public $source;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'accountId'    => 'AccountId',
        'appId'        => 'AppId',
        'appName'      => 'AppName',
        'authRule'     => 'AuthRule',
        'authType'     => 'AuthType',
        'enable'       => 'Enable',
        'id'           => 'Id',
        'k8sNamespace' => 'K8sNamespace',
        'name'         => 'Name',
        'namespaceId'  => 'NamespaceId',
        'protocol'     => 'Protocol',
        'regionId'     => 'RegionId',
        'source'       => 'Source',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->authRule) {
            $res['AuthRule'] = [];
            if (null !== $this->authRule && \is_array($this->authRule)) {
                $n = 0;
                foreach ($this->authRule as $item) {
                    $res['AuthRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AuthRule'])) {
            if (!empty($map['AuthRule'])) {
                $model->authRule = [];
                $n               = 0;
                foreach ($map['AuthRule'] as $item) {
                    $model->authRule[$n++] = null !== $item ? authRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

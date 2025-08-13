<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data\result\authRule;

class result extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var authRule[]
     */
    public $authRule;

    /**
     * @var int
     */
    public $authType;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $k8sNamespace;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'accountId' => 'AccountId',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'authRule' => 'AuthRule',
        'authType' => 'AuthType',
        'enable' => 'Enable',
        'id' => 'Id',
        'k8sNamespace' => 'K8sNamespace',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'source' => 'Source',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->authRule)) {
            Model::validateArray($this->authRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->authRule)) {
                $res['AuthRule'] = [];
                $n1 = 0;
                foreach ($this->authRule as $item1) {
                    $res['AuthRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['AuthRule'] as $item1) {
                    $model->authRule[$n1] = authRule::fromMap($item1);
                    ++$n1;
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateGrafanaWorkspaceRequest\tags;

class CreateGrafanaWorkspaceRequest extends Model
{
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var string
     */
    public $aliyunLang;
    /**
     * @var string
     */
    public $autoRenew;
    /**
     * @var string
     */
    public $customAccountNumber;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $duration;
    /**
     * @var string
     */
    public $grafanaVersion;
    /**
     * @var string
     */
    public $grafanaWorkspaceEdition;
    /**
     * @var string
     */
    public $grafanaWorkspaceName;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $pricingCycle;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'accountNumber'           => 'AccountNumber',
        'aliyunLang'              => 'AliyunLang',
        'autoRenew'               => 'AutoRenew',
        'customAccountNumber'     => 'CustomAccountNumber',
        'description'             => 'Description',
        'duration'                => 'Duration',
        'grafanaVersion'          => 'GrafanaVersion',
        'grafanaWorkspaceEdition' => 'GrafanaWorkspaceEdition',
        'grafanaWorkspaceName'    => 'GrafanaWorkspaceName',
        'password'                => 'Password',
        'pricingCycle'            => 'PricingCycle',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'tags'                    => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNumber) {
            $res['AccountNumber'] = $this->accountNumber;
        }

        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->customAccountNumber) {
            $res['CustomAccountNumber'] = $this->customAccountNumber;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->grafanaVersion) {
            $res['GrafanaVersion'] = $this->grafanaVersion;
        }

        if (null !== $this->grafanaWorkspaceEdition) {
            $res['GrafanaWorkspaceEdition'] = $this->grafanaWorkspaceEdition;
        }

        if (null !== $this->grafanaWorkspaceName) {
            $res['GrafanaWorkspaceName'] = $this->grafanaWorkspaceName;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AccountNumber'])) {
            $model->accountNumber = $map['AccountNumber'];
        }

        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['CustomAccountNumber'])) {
            $model->customAccountNumber = $map['CustomAccountNumber'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['GrafanaVersion'])) {
            $model->grafanaVersion = $map['GrafanaVersion'];
        }

        if (isset($map['GrafanaWorkspaceEdition'])) {
            $model->grafanaWorkspaceEdition = $map['GrafanaWorkspaceEdition'];
        }

        if (isset($map['GrafanaWorkspaceName'])) {
            $model->grafanaWorkspaceName = $map['GrafanaWorkspaceName'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

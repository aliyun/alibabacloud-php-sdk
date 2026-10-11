<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyConfigurationRequest\defaultRulePhaseActions;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyConfigurationRequest\tag;

class CreateEgressProxyConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var defaultRulePhaseActions
     */
    public $defaultRulePhaseActions;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $egressProxyConfigurationName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'defaultRulePhaseActions' => 'DefaultRulePhaseActions',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'egressProxyConfigurationName' => 'EgressProxyConfigurationName',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (null !== $this->defaultRulePhaseActions) {
            $this->defaultRulePhaseActions->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->defaultRulePhaseActions) {
            $res['DefaultRulePhaseActions'] = null !== $this->defaultRulePhaseActions ? $this->defaultRulePhaseActions->toArray($noStream) : $this->defaultRulePhaseActions;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->egressProxyConfigurationName) {
            $res['EgressProxyConfigurationName'] = $this->egressProxyConfigurationName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DefaultRulePhaseActions'])) {
            $model->defaultRulePhaseActions = defaultRulePhaseActions::fromMap($map['DefaultRulePhaseActions']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EgressProxyConfigurationName'])) {
            $model->egressProxyConfigurationName = $map['EgressProxyConfigurationName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

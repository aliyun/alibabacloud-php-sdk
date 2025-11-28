<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class CreateScanRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespacesShrink;

    /**
     * @var string
     */
    public $repoNamesShrink;

    /**
     * @var string
     */
    public $repoTagFilterPattern;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $scanScope;

    /**
     * @var string
     */
    public $scanType;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'namespacesShrink' => 'Namespaces',
        'repoNamesShrink' => 'RepoNames',
        'repoTagFilterPattern' => 'RepoTagFilterPattern',
        'ruleName' => 'RuleName',
        'scanScope' => 'ScanScope',
        'scanType' => 'ScanType',
        'triggerType' => 'TriggerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespacesShrink) {
            $res['Namespaces'] = $this->namespacesShrink;
        }

        if (null !== $this->repoNamesShrink) {
            $res['RepoNames'] = $this->repoNamesShrink;
        }

        if (null !== $this->repoTagFilterPattern) {
            $res['RepoTagFilterPattern'] = $this->repoTagFilterPattern;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->scanScope) {
            $res['ScanScope'] = $this->scanScope;
        }

        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Namespaces'])) {
            $model->namespacesShrink = $map['Namespaces'];
        }

        if (isset($map['RepoNames'])) {
            $model->repoNamesShrink = $map['RepoNames'];
        }

        if (isset($map['RepoTagFilterPattern'])) {
            $model->repoTagFilterPattern = $map['RepoTagFilterPattern'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['ScanScope'])) {
            $model->scanScope = $map['ScanScope'];
        }

        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}

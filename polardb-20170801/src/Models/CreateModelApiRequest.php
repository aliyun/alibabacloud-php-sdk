<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateModelApiRequest extends Model
{
    /**
     * @var string
     */
    public $forceModel;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $modelCategory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pathPrefix;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $recordInput;

    /**
     * @var string
     */
    public $recordOutput;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $routeRules;
    protected $_name = [
        'forceModel' => 'ForceModel',
        'gwClusterId' => 'GwClusterId',
        'modelCategory' => 'ModelCategory',
        'name' => 'Name',
        'pathPrefix' => 'PathPrefix',
        'protocol' => 'Protocol',
        'recordInput' => 'RecordInput',
        'recordOutput' => 'RecordOutput',
        'regionId' => 'RegionId',
        'routeRules' => 'RouteRules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forceModel) {
            $res['ForceModel'] = $this->forceModel;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->modelCategory) {
            $res['ModelCategory'] = $this->modelCategory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pathPrefix) {
            $res['PathPrefix'] = $this->pathPrefix;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->recordInput) {
            $res['RecordInput'] = $this->recordInput;
        }

        if (null !== $this->recordOutput) {
            $res['RecordOutput'] = $this->recordOutput;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->routeRules) {
            $res['RouteRules'] = $this->routeRules;
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
        if (isset($map['ForceModel'])) {
            $model->forceModel = $map['ForceModel'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['ModelCategory'])) {
            $model->modelCategory = $map['ModelCategory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PathPrefix'])) {
            $model->pathPrefix = $map['PathPrefix'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RecordInput'])) {
            $model->recordInput = $map['RecordInput'];
        }

        if (isset($map['RecordOutput'])) {
            $model->recordOutput = $map['RecordOutput'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RouteRules'])) {
            $model->routeRules = $map['RouteRules'];
        }

        return $model;
    }
}

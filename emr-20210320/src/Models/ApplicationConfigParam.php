<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ApplicationConfigParam extends Model
{
    /**
     * @var string
     */
    public $configAction;

    /**
     * @var string
     */
    public $configFileName;

    /**
     * @var string
     */
    public $configItemDescription;

    /**
     * @var string
     */
    public $configItemKey;

    /**
     * @var string
     */
    public $configItemValue;

    /**
     * @var string
     */
    public $configScope;

    /**
     * @var string
     */
    public $effectiveActions;

    /**
     * @var string
     */
    public $effectiveType;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'configAction'          => 'ConfigAction',
        'configFileName'        => 'ConfigFileName',
        'configItemDescription' => 'ConfigItemDescription',
        'configItemKey'         => 'ConfigItemKey',
        'configItemValue'       => 'ConfigItemValue',
        'configScope'           => 'ConfigScope',
        'effectiveActions'      => 'EffectiveActions',
        'effectiveType'         => 'EffectiveType',
        'nodeGroupId'           => 'NodeGroupId',
        'nodeId'                => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configAction) {
            $res['ConfigAction'] = $this->configAction;
        }
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }
        if (null !== $this->configItemDescription) {
            $res['ConfigItemDescription'] = $this->configItemDescription;
        }
        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }
        if (null !== $this->configItemValue) {
            $res['ConfigItemValue'] = $this->configItemValue;
        }
        if (null !== $this->configScope) {
            $res['ConfigScope'] = $this->configScope;
        }
        if (null !== $this->effectiveActions) {
            $res['EffectiveActions'] = $this->effectiveActions;
        }
        if (null !== $this->effectiveType) {
            $res['EffectiveType'] = $this->effectiveType;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplicationConfigParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigAction'])) {
            $model->configAction = $map['ConfigAction'];
        }
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }
        if (isset($map['ConfigItemDescription'])) {
            $model->configItemDescription = $map['ConfigItemDescription'];
        }
        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }
        if (isset($map['ConfigItemValue'])) {
            $model->configItemValue = $map['ConfigItemValue'];
        }
        if (isset($map['ConfigScope'])) {
            $model->configScope = $map['ConfigScope'];
        }
        if (isset($map['EffectiveActions'])) {
            $model->effectiveActions = $map['EffectiveActions'];
        }
        if (isset($map['EffectiveType'])) {
            $model->effectiveType = $map['EffectiveType'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\RoutePolicy;

class CreateAliasRequest extends Model {
    protected $_name = [
        'additionalVersionWeight' => 'additionalVersionWeight',
        'aliasName' => 'aliasName',
        'description' => 'description',
        'resolvePolicy' => 'resolvePolicy',
        'routePolicy' => 'routePolicy',
        'versionId' => 'versionId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->additionalVersionWeight) {
            $res['additionalVersionWeight'] = $this->additionalVersionWeight;
        }
        if (null !== $this->aliasName) {
            $res['aliasName'] = $this->aliasName;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->resolvePolicy) {
            $res['resolvePolicy'] = $this->resolvePolicy;
        }
        if (null !== $this->routePolicy) {
            $res['routePolicy'] = null !== $this->routePolicy ? $this->routePolicy->toMap() : null;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateAliasRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['additionalVersionWeight'])){
            $model->additionalVersionWeight = $map['additionalVersionWeight'];
        }
        if(isset($map['aliasName'])){
            $model->aliasName = $map['aliasName'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['resolvePolicy'])){
            $model->resolvePolicy = $map['resolvePolicy'];
        }
        if(isset($map['routePolicy'])){
            $model->routePolicy = RoutePolicy::fromMap($map['routePolicy']);
        }
        if(isset($map['versionId'])){
            $model->versionId = $map['versionId'];
        }
        return $model;
    }
    /**
     * @var float[]
     */
    public $additionalVersionWeight;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resolvePolicy;

    /**
     * @var RoutePolicy
     */
    public $routePolicy;

    /**
     * @var string
     */
    public $versionId;

}

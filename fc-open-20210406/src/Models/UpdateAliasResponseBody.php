<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateAliasResponseBody extends Model {
    protected $_name = [
        'additionalVersionWeight' => 'additionalVersionWeight',
        'aliasName' => 'aliasName',
        'createdTime' => 'createdTime',
        'description' => 'description',
        'lastModifiedTime' => 'lastModifiedTime',
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
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateAliasResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['additionalVersionWeight'])){
            $model->additionalVersionWeight = $map['additionalVersionWeight'];
        }
        if(isset($map['aliasName'])){
            $model->aliasName = $map['aliasName'];
        }
        if(isset($map['createdTime'])){
            $model->createdTime = $map['createdTime'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['lastModifiedTime'])){
            $model->lastModifiedTime = $map['lastModifiedTime'];
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
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $versionId;

}

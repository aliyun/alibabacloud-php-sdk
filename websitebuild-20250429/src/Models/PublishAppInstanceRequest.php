<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class PublishAppInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $deployChannel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $logicalNumber;

    /**
     * @var string
     */
    public $publishNumber;

    /**
     * @var string
     */
    public $weappAction;
    protected $_name = [
        'bizId' => 'BizId',
        'deployChannel' => 'DeployChannel',
        'description' => 'Description',
        'logicalNumber' => 'LogicalNumber',
        'publishNumber' => 'PublishNumber',
        'weappAction' => 'WeappAction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->deployChannel) {
            $res['DeployChannel'] = $this->deployChannel;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->logicalNumber) {
            $res['LogicalNumber'] = $this->logicalNumber;
        }

        if (null !== $this->publishNumber) {
            $res['PublishNumber'] = $this->publishNumber;
        }

        if (null !== $this->weappAction) {
            $res['WeappAction'] = $this->weappAction;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DeployChannel'])) {
            $model->deployChannel = $map['DeployChannel'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LogicalNumber'])) {
            $model->logicalNumber = $map['LogicalNumber'];
        }

        if (isset($map['PublishNumber'])) {
            $model->publishNumber = $map['PublishNumber'];
        }

        if (isset($map['WeappAction'])) {
            $model->weappAction = $map['WeappAction'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateSentinelBlockFallbackDefinitionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $fallbackBehavior;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $resourceClassification;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appName' => 'AppName',
        'fallbackBehavior' => 'FallbackBehavior',
        'id' => 'Id',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'resourceClassification' => 'ResourceClassification',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->fallbackBehavior) {
            $res['FallbackBehavior'] = $this->fallbackBehavior;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->resourceClassification) {
            $res['ResourceClassification'] = $this->resourceClassification;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['FallbackBehavior'])) {
            $model->fallbackBehavior = $map['FallbackBehavior'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ResourceClassification'])) {
            $model->resourceClassification = $map['ResourceClassification'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

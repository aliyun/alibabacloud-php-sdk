<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class ConfigSetUpdateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $ipPoolId;

    /**
     * @var bool
     */
    public $isPublicChannelBackoff;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $validationOptionShrink;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'ipPoolId' => 'IpPoolId',
        'isPublicChannelBackoff' => 'IsPublicChannelBackoff',
        'name' => 'Name',
        'validationOptionShrink' => 'ValidationOption',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ipPoolId) {
            $res['IpPoolId'] = $this->ipPoolId;
        }

        if (null !== $this->isPublicChannelBackoff) {
            $res['IsPublicChannelBackoff'] = $this->isPublicChannelBackoff;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->validationOptionShrink) {
            $res['ValidationOption'] = $this->validationOptionShrink;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IpPoolId'])) {
            $model->ipPoolId = $map['IpPoolId'];
        }

        if (isset($map['IsPublicChannelBackoff'])) {
            $model->isPublicChannelBackoff = $map['IsPublicChannelBackoff'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ValidationOption'])) {
            $model->validationOptionShrink = $map['ValidationOption'];
        }

        return $model;
    }
}

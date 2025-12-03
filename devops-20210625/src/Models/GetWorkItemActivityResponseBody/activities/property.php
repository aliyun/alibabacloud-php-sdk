<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities;

use AlibabaCloud\Dara\Model;

class property extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $propertyIdentifier;

    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $propertyType;
    protected $_name = [
        'displayName' => 'displayName',
        'propertyIdentifier' => 'propertyIdentifier',
        'propertyName' => 'propertyName',
        'propertyType' => 'propertyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->propertyIdentifier) {
            $res['propertyIdentifier'] = $this->propertyIdentifier;
        }

        if (null !== $this->propertyName) {
            $res['propertyName'] = $this->propertyName;
        }

        if (null !== $this->propertyType) {
            $res['propertyType'] = $this->propertyType;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['propertyIdentifier'])) {
            $model->propertyIdentifier = $map['propertyIdentifier'];
        }

        if (isset($map['propertyName'])) {
            $model->propertyName = $map['propertyName'];
        }

        if (isset($map['propertyType'])) {
            $model->propertyType = $map['propertyType'];
        }

        return $model;
    }
}

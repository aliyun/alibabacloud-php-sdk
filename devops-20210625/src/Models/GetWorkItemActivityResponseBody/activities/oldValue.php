<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities;

use AlibabaCloud\Dara\Model;

class oldValue extends Model
{
    /**
     * @var string
     */
    public $displayValue;
    /**
     * @var string
     */
    public $plainValue;
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'displayValue' => 'displayValue',
        'plainValue'   => 'plainValue',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayValue) {
            $res['displayValue'] = $this->displayValue;
        }

        if (null !== $this->plainValue) {
            $res['plainValue'] = $this->plainValue;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['displayValue'])) {
            $model->displayValue = $map['displayValue'];
        }

        if (isset($map['plainValue'])) {
            $model->plainValue = $map['plainValue'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}

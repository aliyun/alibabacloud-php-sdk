<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities;

use AlibabaCloud\Tea\Model;

class oldValue extends Model
{
    /**
     * @example Sprint-221124
     *
     * @var string
     */
    public $displayValue;

    /**
     * @example bed1cca179badeb501a72d1194
     *
     * @var string
     */
    public $plainValue;

    /**
     * @example Sprint
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return oldValue
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaItemResponseBody;

use AlibabaCloud\Tea\Model;

class propertyItems extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $typeDisplay;
    protected $_name = [
        'bizType'     => 'BizType',
        'count'       => 'Count',
        'name'        => 'Name',
        'typeDisplay' => 'TypeDisplay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->typeDisplay) {
            $res['TypeDisplay'] = $this->typeDisplay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TypeDisplay'])) {
            $model->typeDisplay = $map['TypeDisplay'];
        }

        return $model;
    }
}

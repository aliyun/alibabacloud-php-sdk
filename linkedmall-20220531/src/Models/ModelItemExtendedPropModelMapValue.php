<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class ModelItemExtendedPropModelMapValue extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $valueStart;

    /**
     * @var string
     */
    public $valueEnd;

    /**
     * @var string
     */
    public $key;

    /**
     * @var mixed[]
     */
    public $childProps;
    protected $_name = [
        'name'       => 'Name',
        'valueStart' => 'ValueStart',
        'valueEnd'   => 'ValueEnd',
        'key'        => 'Key',
        'childProps' => 'ChildProps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->valueStart) {
            $res['ValueStart'] = $this->valueStart;
        }
        if (null !== $this->valueEnd) {
            $res['ValueEnd'] = $this->valueEnd;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->childProps) {
            $res['ChildProps'] = $this->childProps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModelItemExtendedPropModelMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ValueStart'])) {
            $model->valueStart = $map['ValueStart'];
        }
        if (isset($map['ValueEnd'])) {
            $model->valueEnd = $map['ValueEnd'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ChildProps'])) {
            $model->childProps = $map['ChildProps'];
        }

        return $model;
    }
}

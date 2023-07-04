<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\UpdateTaskCustomerRequest;

use AlibabaCloud\Tea\Model;

class customers extends Model
{
    /**
     * @description 是否取消外呼 0否，1是
     *
     * @example 0
     *
     * @var int
     */
    public $cancel;

    /**
     * @description 电话号码
     *
     * @example 13661109390
     *
     * @var string
     */
    public $number;

    /**
     * @description 需根据具体任务参数要求传输
     *
     * @example {"test":"234"}
     *
     * @var mixed[]
     */
    public $properties;

    /**
     * @description 用户自定义标签
     *
     * @example tag1
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'cancel'     => 'Cancel',
        'number'     => 'Number',
        'properties' => 'Properties',
        'tag'        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancel) {
            $res['Cancel'] = $this->cancel;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cancel'])) {
            $model->cancel = $map['Cancel'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}

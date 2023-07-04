<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberRequest;

use AlibabaCloud\Tea\Model;

class customers extends Model
{
    /**
     * @example http://test.com
     *
     * @var string
     */
    public $clientUrl;

    /**
     * @example 13541251222,18665214444
     *
     * @var string
     */
    public $number;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $numberMD5;

    /**
     * @example {"testt":"123"}
     *
     * @var mixed[]
     */
    public $properties;

    /**
     * @example tag1
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'clientUrl'  => 'ClientUrl',
        'number'     => 'Number',
        'numberMD5'  => 'NumberMD5',
        'properties' => 'Properties',
        'tag'        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientUrl) {
            $res['ClientUrl'] = $this->clientUrl;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberMD5) {
            $res['NumberMD5'] = $this->numberMD5;
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
        if (isset($map['ClientUrl'])) {
            $model->clientUrl = $map['ClientUrl'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberMD5'])) {
            $model->numberMD5 = $map['NumberMD5'];
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

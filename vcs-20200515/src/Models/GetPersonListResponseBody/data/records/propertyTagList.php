<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonListResponseBody\data\records;

use AlibabaCloud\Tea\Model;

class propertyTagList extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagCodeName;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'value'       => 'Value',
        'tagName'     => 'TagName',
        'tagCodeName' => 'TagCodeName',
        'code'        => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagCodeName) {
            $res['TagCodeName'] = $this->tagCodeName;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyTagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagCodeName'])) {
            $model->tagCodeName = $map['TagCodeName'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

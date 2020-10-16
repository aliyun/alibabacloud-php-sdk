<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonListResponse\data\records;

use AlibabaCloud\Tea\Model;

class propertyTagList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $tagCodeName;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'code'        => 'Code',
        'tagCodeName' => 'TagCodeName',
        'tagName'     => 'TagName',
        'value'       => 'Value',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('tagCodeName', $this->tagCodeName, true);
        Model::validateRequired('tagName', $this->tagName, true);
        Model::validateRequired('value', $this->value, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->tagCodeName) {
            $res['TagCodeName'] = $this->tagCodeName;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['TagCodeName'])) {
            $model->tagCodeName = $map['TagCodeName'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

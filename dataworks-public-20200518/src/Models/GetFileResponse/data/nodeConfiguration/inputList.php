<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data\nodeConfiguration;

use AlibabaCloud\Tea\Model;

class inputList extends Model
{
    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $parseType;
    protected $_name = [
        'input'     => 'Input',
        'parseType' => 'ParseType',
    ];

    public function validate()
    {
        Model::validateRequired('input', $this->input, true);
        Model::validateRequired('parseType', $this->parseType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->parseType) {
            $res['ParseType'] = $this->parseType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['ParseType'])) {
            $model->parseType = $map['ParseType'];
        }

        return $model;
    }
}

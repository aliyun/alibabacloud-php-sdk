<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration;

use AlibabaCloud\Tea\Model;

class inputList extends Model
{
    /**
     * @description The output names of the parent files on which the current file depends.
     *
     * This parameter is equivalent to the Output Name parameter under Parent Nodes in the Dependencies section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example dw_project_root
     *
     * @var string
     */
    public $input;

    /**
     * @description The mode of the configuration file dependency. Valid values:
     *
     *   MANUAL: The scheduling dependencies are manually configured.
     *   AUTO: The scheduling dependencies are automatically parsed.
     *
     * @example MANUAL
     *
     * @var string
     */
    public $parseType;
    protected $_name = [
        'input'     => 'Input',
        'parseType' => 'ParseType',
    ];

    public function validate()
    {
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

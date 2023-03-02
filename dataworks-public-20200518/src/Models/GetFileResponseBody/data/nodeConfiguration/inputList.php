<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration;

use AlibabaCloud\Tea\Model;

class inputList extends Model
{
    /**
     * @description The output name of the parent file on which the current file depends.
     *
     * This parameter corresponds to the Output Name parameter under Parent Nodes after Same Cycle is selected in the Dependencies section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example project.001_out
     *
     * @var string
     */
    public $input;

    /**
     * @description The mode of the configuration file dependency. Valid values:
     *
     *   MANUAL: Scheduling dependencies are manually configured.
     *   AUTO: Scheduling dependencies are automatically parsed.
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

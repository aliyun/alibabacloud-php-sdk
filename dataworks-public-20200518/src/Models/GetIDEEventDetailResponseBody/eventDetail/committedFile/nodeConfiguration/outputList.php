<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration;

use AlibabaCloud\Tea\Model;

class outputList extends Model
{
    /**
     * @description The output name of the current file.
     *
     * This parameter is equivalent to the Output Name parameter under Output in the Dependencies section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example dw_project.002_out
     *
     * @var string
     */
    public $output;

    /**
     * @description The output table name of the current file.
     *
     * This parameter is equivalent to the Output Table Name parameter under Output in the Dependencies section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example ods_user_info_d
     *
     * @var string
     */
    public $refTableName;
    protected $_name = [
        'output'       => 'Output',
        'refTableName' => 'RefTableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->refTableName) {
            $res['RefTableName'] = $this->refTableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['RefTableName'])) {
            $model->refTableName = $map['RefTableName'];
        }

        return $model;
    }
}

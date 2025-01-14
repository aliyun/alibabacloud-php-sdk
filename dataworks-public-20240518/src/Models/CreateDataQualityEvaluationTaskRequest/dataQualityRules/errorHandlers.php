<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\dataQualityRules;

use AlibabaCloud\Tea\Model;

class errorHandlers extends Model
{
    /**
     * @description The SQL statement that is used to filter failed tasks. If you define the rule by using custom SQL statements, you must specify an SQL statement to filter failed tasks.
     *
     * @example SELECT * FROM ods_api_log WHERE status = \\"Error\\";
     *
     * @var string
     */
    public $errorDataFilter;

    /**
     * @description The type of the operation. Valid values:
     *
     *   SaveErrorData
     *
     * @example SaveErrorData
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'errorDataFilter' => 'ErrorDataFilter',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDataFilter) {
            $res['ErrorDataFilter'] = $this->errorDataFilter;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorHandlers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDataFilter'])) {
            $model->errorDataFilter = $map['ErrorDataFilter'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

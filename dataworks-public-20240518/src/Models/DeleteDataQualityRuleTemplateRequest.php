<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataQualityRuleTemplateRequest extends Model
{
    /**
     * @description The code for the template.
     *
     * @example USER_DEFINED:123
     *
     * @var string
     */
    public $code;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 10001
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'code'      => 'Code',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDataQualityRuleTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

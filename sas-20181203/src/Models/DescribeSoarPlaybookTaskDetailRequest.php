<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarPlaybookTaskDetailRequest extends Model
{
    /**
     * @description Playbook ID.
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $playbookId;

    /**
     * @description The vulnerability ID passed when creating the policy task.
     * This parameter is required.
     * @example 14
     *
     * @var int
     */
    public $recordId;

    /**
     * @description UUID of the playbook task execution.
     * This parameter is required.
     * @example a15e37da-abe0-4d87-acd2-024e875a****
     *
     * @var string
     */
    public $requestUuid;
    protected $_name = [
        'playbookId'  => 'PlaybookId',
        'recordId'    => 'RecordId',
        'requestUuid' => 'RequestUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbookId) {
            $res['PlaybookId'] = $this->playbookId;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarPlaybookTaskDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlaybookId'])) {
            $model->playbookId = $map['PlaybookId'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }

        return $model;
    }
}

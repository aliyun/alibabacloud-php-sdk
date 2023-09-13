<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DeleteTargetsResponseBody\data;

use AlibabaCloud\Tea\Model;

class errorEntries extends Model
{
    /**
     * @description The ID of the event body that failed to be processed.
     *
     * @example target5
     *
     * @var string
     */
    public $entryId;

    /**
     * @description The returned error code.
     *
     * @example EventRuleTargetIdDuplicate
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The returned error message.
     *
     * @example The id of event target is duplicate!
     *
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'entryId'      => 'EntryId',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}

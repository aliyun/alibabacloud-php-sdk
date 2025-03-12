<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody\processDetails;

use AlibabaCloud\Tea\Model;

class checks extends Model
{
    /**
     * @description The ID of the check item associated with the operation subtask.
     *
     * @example 133
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The name of the check item associated with the operation subtask.
     *
     * @example Check for Security Center Agent Status
     *
     * @var string
     */
    public $checkShowName;
    protected $_name = [
        'checkId'       => 'CheckId',
        'checkShowName' => 'CheckShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        return $model;
    }
}

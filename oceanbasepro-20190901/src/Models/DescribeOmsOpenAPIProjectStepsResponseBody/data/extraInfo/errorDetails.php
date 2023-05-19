<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponseBody\data\extraInfo;

use AlibabaCloud\Tea\Model;

class errorDetails extends Model
{
    /**
     * @description The suggestions (old).
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description Contact the administrator.
     *
     * @example CRITICAL
     *
     * @var string
     */
    public $level;

    /**
     * @description A sub-status that indicates whether the checker has completed full verification.
     *
     * @example A system error occurred.
     *
     * @var string
     */
    public $message;

    /**
     * @description The amount of data migrated.
     *
     * @example A system error occurred.
     *
     * @var string
     */
    public $proposal;
    protected $_name = [
        'code'     => 'Code',
        'level'    => 'Level',
        'message'  => 'Message',
        'proposal' => 'Proposal',
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->proposal) {
            $res['Proposal'] = $this->proposal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Proposal'])) {
            $model->proposal = $map['Proposal'];
        }

        return $model;
    }
}

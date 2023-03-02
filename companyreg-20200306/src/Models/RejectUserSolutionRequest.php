<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class RejectUserSolutionRequest extends Model
{
    /**
     * @example esp.companyreg
     *
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $note;

    /**
     * @example S20211227151912000001
     *
     * @var string
     */
    public $solutionBizId;
    protected $_name = [
        'bizType'       => 'BizType',
        'note'          => 'Note',
        'solutionBizId' => 'SolutionBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->solutionBizId) {
            $res['SolutionBizId'] = $this->solutionBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RejectUserSolutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['SolutionBizId'])) {
            $model->solutionBizId = $map['SolutionBizId'];
        }

        return $model;
    }
}

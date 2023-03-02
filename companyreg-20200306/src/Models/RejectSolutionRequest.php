<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class RejectSolutionRequest extends Model
{
    /**
     * @var string
     */
    public $note;

    /**
     * @example S20200512114050000001
     *
     * @var string
     */
    public $solutionBizId;
    protected $_name = [
        'note'          => 'Note',
        'solutionBizId' => 'SolutionBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return RejectSolutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['SolutionBizId'])) {
            $model->solutionBizId = $map['SolutionBizId'];
        }

        return $model;
    }
}

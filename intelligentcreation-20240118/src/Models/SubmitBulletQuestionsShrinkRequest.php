<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\Tea\Model;

class SubmitBulletQuestionsShrinkRequest extends Model
{
    /**
     * @example 715307080659124224
     *
     * @var string
     */
    public $accountId;

    /**
     * @description questions
     *
     * @var string
     */
    public $questionsShrink;

    /**
     * @example 963865
     *
     * @var string
     */
    public $roomId;

    /**
     * @example 713168672276873216
     *
     * @var string
     */
    public $subAccountId;
    protected $_name = [
        'accountId'       => 'accountId',
        'questionsShrink' => 'questions',
        'roomId'          => 'roomId',
        'subAccountId'    => 'subAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->questionsShrink) {
            $res['questions'] = $this->questionsShrink;
        }
        if (null !== $this->roomId) {
            $res['roomId'] = $this->roomId;
        }
        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBulletQuestionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['questions'])) {
            $model->questionsShrink = $map['questions'];
        }
        if (isset($map['roomId'])) {
            $model->roomId = $map['roomId'];
        }
        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }

        return $model;
    }
}

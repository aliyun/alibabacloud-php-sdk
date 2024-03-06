<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\SubmitBulletQuestionsRequest\questions;
use AlibabaCloud\Tea\Model;

class SubmitBulletQuestionsRequest extends Model
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
     * @var questions[]
     */
    public $questions;

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
        'accountId'    => 'accountId',
        'questions'    => 'questions',
        'roomId'       => 'roomId',
        'subAccountId' => 'subAccountId',
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
        if (null !== $this->questions) {
            $res['questions'] = [];
            if (null !== $this->questions && \is_array($this->questions)) {
                $n = 0;
                foreach ($this->questions as $item) {
                    $res['questions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return SubmitBulletQuestionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['questions'])) {
            if (!empty($map['questions'])) {
                $model->questions = [];
                $n                = 0;
                foreach ($map['questions'] as $item) {
                    $model->questions[$n++] = null !== $item ? questions::fromMap($item) : $item;
                }
            }
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

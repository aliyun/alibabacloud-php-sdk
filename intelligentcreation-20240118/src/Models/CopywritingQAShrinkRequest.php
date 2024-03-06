<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\Tea\Model;

class CopywritingQAShrinkRequest extends Model
{
    /**
     * @example 715307080659124224
     *
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $historiesShrink;

    /**
     * @deprecated
     *
     * @var string
     */
    public $historyShrink;

    /**
     * @var string
     */
    public $question;

    /**
     * @example S-d35e9f70-7381-4bc8-80fa-c4d2174d14b9
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $stream;

    /**
     * @example 713168672276873216
     *
     * @var string
     */
    public $subAccountId;
    protected $_name = [
        'accountId'       => 'accountId',
        'historiesShrink' => 'histories',
        'historyShrink'   => 'history',
        'question'        => 'question',
        'sessionId'       => 'sessionId',
        'stream'          => 'stream',
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
        if (null !== $this->historiesShrink) {
            $res['histories'] = $this->historiesShrink;
        }
        if (null !== $this->historyShrink) {
            $res['history'] = $this->historyShrink;
        }
        if (null !== $this->question) {
            $res['question'] = $this->question;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }
        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopywritingQAShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['histories'])) {
            $model->historiesShrink = $map['histories'];
        }
        if (isset($map['history'])) {
            $model->historyShrink = $map['history'];
        }
        if (isset($map['question'])) {
            $model->question = $map['question'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }
        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }

        return $model;
    }
}

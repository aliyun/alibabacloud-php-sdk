<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunSqlGenerationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunSqlGenerationResponseBody\data\chat;

class data extends Model
{
    /**
     * @var chat
     */
    public $chat;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $evidence;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rewrite;

    /**
     * @var string[]
     */
    public $selector;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $sqlError;
    protected $_name = [
        'chat' => 'chat',
        'errorMessage' => 'errorMessage',
        'event' => 'event',
        'evidence' => 'evidence',
        'requestId' => 'requestId',
        'rewrite' => 'rewrite',
        'selector' => 'selector',
        'sessionId' => 'sessionId',
        'sql' => 'sql',
        'sqlError' => 'sqlError',
    ];

    public function validate()
    {
        if (null !== $this->chat) {
            $this->chat->validate();
        }
        if (\is_array($this->selector)) {
            Model::validateArray($this->selector);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chat) {
            $res['chat'] = null !== $this->chat ? $this->chat->toArray($noStream) : $this->chat;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->evidence) {
            $res['evidence'] = $this->evidence;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->rewrite) {
            $res['rewrite'] = $this->rewrite;
        }

        if (null !== $this->selector) {
            if (\is_array($this->selector)) {
                $res['selector'] = [];
                $n1 = 0;
                foreach ($this->selector as $item1) {
                    $res['selector'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sql) {
            $res['sql'] = $this->sql;
        }

        if (null !== $this->sqlError) {
            $res['sqlError'] = $this->sqlError;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chat'])) {
            $model->chat = chat::fromMap($map['chat']);
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        if (isset($map['evidence'])) {
            $model->evidence = $map['evidence'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['rewrite'])) {
            $model->rewrite = $map['rewrite'];
        }

        if (isset($map['selector'])) {
            if (!empty($map['selector'])) {
                $model->selector = [];
                $n1 = 0;
                foreach ($map['selector'] as $item1) {
                    $model->selector[$n1++] = $item1;
                }
            }
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sql'])) {
            $model->sql = $map['sql'];
        }

        if (isset($map['sqlError'])) {
            $model->sqlError = $map['sqlError'];
        }

        return $model;
    }
}

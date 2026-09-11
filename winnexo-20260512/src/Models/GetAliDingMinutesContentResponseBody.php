<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetAliDingMinutesContentResponseBody\transcription;

class GetAliDingMinutesContentResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $minutesId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $todoContent;

    /**
     * @var transcription[]
     */
    public $transcription;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'minutesId' => 'minutesId',
        'requestId' => 'requestId',
        'summary' => 'summary',
        'title' => 'title',
        'todoContent' => 'todoContent',
        'transcription' => 'transcription',
    ];

    public function validate()
    {
        if (\is_array($this->transcription)) {
            Model::validateArray($this->transcription);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->minutesId) {
            $res['minutesId'] = $this->minutesId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->todoContent) {
            $res['todoContent'] = $this->todoContent;
        }

        if (null !== $this->transcription) {
            if (\is_array($this->transcription)) {
                $res['transcription'] = [];
                $n1 = 0;
                foreach ($this->transcription as $item1) {
                    $res['transcription'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['minutesId'])) {
            $model->minutesId = $map['minutesId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['todoContent'])) {
            $model->todoContent = $map['todoContent'];
        }

        if (isset($map['transcription'])) {
            if (!empty($map['transcription'])) {
                $model->transcription = [];
                $n1 = 0;
                foreach ($map['transcription'] as $item1) {
                    $model->transcription[$n1] = transcription::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

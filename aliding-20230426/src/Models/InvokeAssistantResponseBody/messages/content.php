<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\cardCallback;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\dingCard;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\dingNormalCard;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\markdown;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\structView;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\text;

class content extends Model
{
    /**
     * @var cardCallback
     */
    public $cardCallback;

    /**
     * @var dingCard
     */
    public $dingCard;

    /**
     * @var dingNormalCard
     */
    public $dingNormalCard;

    /**
     * @var markdown
     */
    public $markdown;

    /**
     * @var structView
     */
    public $structView;

    /**
     * @var text
     */
    public $text;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cardCallback' => 'cardCallback',
        'dingCard' => 'dingCard',
        'dingNormalCard' => 'dingNormalCard',
        'markdown' => 'markdown',
        'structView' => 'structView',
        'text' => 'text',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->cardCallback) {
            $this->cardCallback->validate();
        }
        if (null !== $this->dingCard) {
            $this->dingCard->validate();
        }
        if (null !== $this->dingNormalCard) {
            $this->dingNormalCard->validate();
        }
        if (null !== $this->markdown) {
            $this->markdown->validate();
        }
        if (null !== $this->structView) {
            $this->structView->validate();
        }
        if (null !== $this->text) {
            $this->text->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardCallback) {
            $res['cardCallback'] = null !== $this->cardCallback ? $this->cardCallback->toArray($noStream) : $this->cardCallback;
        }

        if (null !== $this->dingCard) {
            $res['dingCard'] = null !== $this->dingCard ? $this->dingCard->toArray($noStream) : $this->dingCard;
        }

        if (null !== $this->dingNormalCard) {
            $res['dingNormalCard'] = null !== $this->dingNormalCard ? $this->dingNormalCard->toArray($noStream) : $this->dingNormalCard;
        }

        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toArray($noStream) : $this->markdown;
        }

        if (null !== $this->structView) {
            $res['structView'] = null !== $this->structView ? $this->structView->toArray($noStream) : $this->structView;
        }

        if (null !== $this->text) {
            $res['text'] = null !== $this->text ? $this->text->toArray($noStream) : $this->text;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['cardCallback'])) {
            $model->cardCallback = cardCallback::fromMap($map['cardCallback']);
        }

        if (isset($map['dingCard'])) {
            $model->dingCard = dingCard::fromMap($map['dingCard']);
        }

        if (isset($map['dingNormalCard'])) {
            $model->dingNormalCard = dingNormalCard::fromMap($map['dingNormalCard']);
        }

        if (isset($map['markdown'])) {
            $model->markdown = markdown::fromMap($map['markdown']);
        }

        if (isset($map['structView'])) {
            $model->structView = structView::fromMap($map['structView']);
        }

        if (isset($map['text'])) {
            $model->text = text::fromMap($map['text']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\content\cardCallback;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\content\dingCard;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\content\imageUrl;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\content\markdown;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\content\text;

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
     * @var imageUrl
     */
    public $imageUrl;
    /**
     * @var markdown
     */
    public $markdown;
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
        'dingCard'     => 'dingCard',
        'imageUrl'     => 'imageUrl',
        'markdown'     => 'markdown',
        'text'         => 'text',
        'type'         => 'type',
    ];

    public function validate()
    {
        if (null !== $this->cardCallback) {
            $this->cardCallback->validate();
        }
        if (null !== $this->dingCard) {
            $this->dingCard->validate();
        }
        if (null !== $this->imageUrl) {
            $this->imageUrl->validate();
        }
        if (null !== $this->markdown) {
            $this->markdown->validate();
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

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = null !== $this->imageUrl ? $this->imageUrl->toArray($noStream) : $this->imageUrl;
        }

        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toArray($noStream) : $this->markdown;
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

        if (isset($map['imageUrl'])) {
            $model->imageUrl = imageUrl::fromMap($map['imageUrl']);
        }

        if (isset($map['markdown'])) {
            $model->markdown = markdown::fromMap($map['markdown']);
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

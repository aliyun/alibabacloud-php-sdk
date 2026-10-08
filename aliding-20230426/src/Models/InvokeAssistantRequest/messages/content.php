<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\cardCallback;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\dingCard;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\dingNormalCard;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\markdown;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\parts;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\structView;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\text;

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
     * @var string[]
     */
    public $extensions;

    /**
     * @var markdown
     */
    public $markdown;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var parts[]
     */
    public $parts;

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
        'extensions' => 'extensions',
        'markdown' => 'markdown',
        'metadata' => 'metadata',
        'parts' => 'parts',
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
        if (\is_array($this->extensions)) {
            Model::validateArray($this->extensions);
        }
        if (null !== $this->markdown) {
            $this->markdown->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->parts)) {
            Model::validateArray($this->parts);
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

        if (null !== $this->extensions) {
            if (\is_array($this->extensions)) {
                $res['extensions'] = [];
                $n1 = 0;
                foreach ($this->extensions as $item1) {
                    $res['extensions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toArray($noStream) : $this->markdown;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->parts) {
            if (\is_array($this->parts)) {
                $res['parts'] = [];
                $n1 = 0;
                foreach ($this->parts as $item1) {
                    $res['parts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['extensions'])) {
            if (!empty($map['extensions'])) {
                $model->extensions = [];
                $n1 = 0;
                foreach ($map['extensions'] as $item1) {
                    $model->extensions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['markdown'])) {
            $model->markdown = markdown::fromMap($map['markdown']);
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['parts'])) {
            if (!empty($map['parts'])) {
                $model->parts = [];
                $n1 = 0;
                foreach ($map['parts'] as $item1) {
                    $model->parts[$n1] = parts::fromMap($item1);
                    ++$n1;
                }
            }
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

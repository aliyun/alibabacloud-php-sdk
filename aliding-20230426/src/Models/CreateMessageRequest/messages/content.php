<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\cardCallback;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\dingCard;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\dingNormalCard;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\markdown;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\structView;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\text;
use AlibabaCloud\Tea\Model;

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
     * @example {}
     *
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
     * @description This parameter is required.
     *
     * @example 枚举字段，可为：text,markdown,cardCallback,dingCard,agentArtifact,dingNormalCard
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardCallback) {
            $res['cardCallback'] = null !== $this->cardCallback ? $this->cardCallback->toMap() : null;
        }
        if (null !== $this->dingCard) {
            $res['dingCard'] = null !== $this->dingCard ? $this->dingCard->toMap() : null;
        }
        if (null !== $this->dingNormalCard) {
            $res['dingNormalCard'] = null !== $this->dingNormalCard ? $this->dingNormalCard->toMap() : null;
        }
        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toMap() : null;
        }
        if (null !== $this->structView) {
            $res['structView'] = null !== $this->structView ? $this->structView->toMap() : null;
        }
        if (null !== $this->text) {
            $res['text'] = null !== $this->text ? $this->text->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
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

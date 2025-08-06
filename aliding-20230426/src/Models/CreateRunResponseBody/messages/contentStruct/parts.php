<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\contentStruct;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\contentStruct\parts\dataPart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\contentStruct\parts\reasonPart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\contentStruct\parts\recommendPart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\contentStruct\parts\referencePart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\contentStruct\parts\textPart;

class parts extends Model
{
    /**
     * @var bool
     */
    public $append;

    /**
     * @var dataPart
     */
    public $dataPart;

    /**
     * @var bool
     */
    public $finish;

    /**
     * @var string
     */
    public $partDesc;

    /**
     * @var string
     */
    public $partId;

    /**
     * @var reasonPart
     */
    public $reasonPart;

    /**
     * @var recommendPart
     */
    public $recommendPart;

    /**
     * @var referencePart
     */
    public $referencePart;

    /**
     * @var textPart
     */
    public $textPart;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'append' => 'append',
        'dataPart' => 'dataPart',
        'finish' => 'finish',
        'partDesc' => 'partDesc',
        'partId' => 'partId',
        'reasonPart' => 'reasonPart',
        'recommendPart' => 'recommendPart',
        'referencePart' => 'referencePart',
        'textPart' => 'textPart',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->dataPart) {
            $this->dataPart->validate();
        }
        if (null !== $this->reasonPart) {
            $this->reasonPart->validate();
        }
        if (null !== $this->recommendPart) {
            $this->recommendPart->validate();
        }
        if (null !== $this->referencePart) {
            $this->referencePart->validate();
        }
        if (null !== $this->textPart) {
            $this->textPart->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->append) {
            $res['append'] = $this->append;
        }

        if (null !== $this->dataPart) {
            $res['dataPart'] = null !== $this->dataPart ? $this->dataPart->toArray($noStream) : $this->dataPart;
        }

        if (null !== $this->finish) {
            $res['finish'] = $this->finish;
        }

        if (null !== $this->partDesc) {
            $res['partDesc'] = $this->partDesc;
        }

        if (null !== $this->partId) {
            $res['partId'] = $this->partId;
        }

        if (null !== $this->reasonPart) {
            $res['reasonPart'] = null !== $this->reasonPart ? $this->reasonPart->toArray($noStream) : $this->reasonPart;
        }

        if (null !== $this->recommendPart) {
            $res['recommendPart'] = null !== $this->recommendPart ? $this->recommendPart->toArray($noStream) : $this->recommendPart;
        }

        if (null !== $this->referencePart) {
            $res['referencePart'] = null !== $this->referencePart ? $this->referencePart->toArray($noStream) : $this->referencePart;
        }

        if (null !== $this->textPart) {
            $res['textPart'] = null !== $this->textPart ? $this->textPart->toArray($noStream) : $this->textPart;
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
        if (isset($map['append'])) {
            $model->append = $map['append'];
        }

        if (isset($map['dataPart'])) {
            $model->dataPart = dataPart::fromMap($map['dataPart']);
        }

        if (isset($map['finish'])) {
            $model->finish = $map['finish'];
        }

        if (isset($map['partDesc'])) {
            $model->partDesc = $map['partDesc'];
        }

        if (isset($map['partId'])) {
            $model->partId = $map['partId'];
        }

        if (isset($map['reasonPart'])) {
            $model->reasonPart = reasonPart::fromMap($map['reasonPart']);
        }

        if (isset($map['recommendPart'])) {
            $model->recommendPart = recommendPart::fromMap($map['recommendPart']);
        }

        if (isset($map['referencePart'])) {
            $model->referencePart = referencePart::fromMap($map['referencePart']);
        }

        if (isset($map['textPart'])) {
            $model->textPart = textPart::fromMap($map['textPart']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

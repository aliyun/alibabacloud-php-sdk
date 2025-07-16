<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\structView;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\structView\parts\dataPart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\structView\parts\reasonPart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\structView\parts\recommendPart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\structView\parts\referencePart;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\structView\parts\textPart;
use AlibabaCloud\Tea\Model;

class parts extends Model
{
    /**
     * @var bool
     */
    public $append;

    /**
     * @example {}
     *
     * @var dataPart
     */
    public $dataPart;

    /**
     * @var bool
     */
    public $finish;

    /**
     * @example 这是正文内容部分
     *
     * @var string
     */
    public $partDesc;

    /**
     * @example artifactId123
     *
     * @var string
     */
    public $partId;

    /**
     * @example {}
     *
     * @var reasonPart
     */
    public $reasonPart;

    /**
     * @example {}
     *
     * @var recommendPart
     */
    public $recommendPart;

    /**
     * @example {}
     *
     * @var referencePart
     */
    public $referencePart;

    /**
     * @example {}
     *
     * @var textPart
     */
    public $textPart;

    /**
     * @description This parameter is required.
     *
     * @example textPart
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->append) {
            $res['append'] = $this->append;
        }
        if (null !== $this->dataPart) {
            $res['dataPart'] = null !== $this->dataPart ? $this->dataPart->toMap() : null;
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
            $res['reasonPart'] = null !== $this->reasonPart ? $this->reasonPart->toMap() : null;
        }
        if (null !== $this->recommendPart) {
            $res['recommendPart'] = null !== $this->recommendPart ? $this->recommendPart->toMap() : null;
        }
        if (null !== $this->referencePart) {
            $res['referencePart'] = null !== $this->referencePart ? $this->referencePart->toMap() : null;
        }
        if (null !== $this->textPart) {
            $res['textPart'] = null !== $this->textPart ? $this->textPart->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parts
     */
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

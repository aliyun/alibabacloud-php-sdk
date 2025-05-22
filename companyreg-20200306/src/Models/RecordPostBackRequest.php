<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class RecordPostBackRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $contactor;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $entityKey;
    protected $_name = [
        'bizId' => 'bizId',
        'bizType' => 'bizType',
        'contactor' => 'contactor',
        'content' => 'content',
        'entityKey' => 'entityKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->contactor) {
            $res['contactor'] = $this->contactor;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->entityKey) {
            $res['entityKey'] = $this->entityKey;
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
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }

        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['contactor'])) {
            $model->contactor = $map['contactor'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['entityKey'])) {
            $model->entityKey = $map['entityKey'];
        }

        return $model;
    }
}

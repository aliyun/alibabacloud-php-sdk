<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class UnblockSendingRequest extends Model
{
    /**
     * @var string
     */
    public $blockEmail;

    /**
     * @var string
     */
    public $blockType;

    /**
     * @var string
     */
    public $senderEmail;
    protected $_name = [
        'blockEmail' => 'BlockEmail',
        'blockType' => 'BlockType',
        'senderEmail' => 'SenderEmail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockEmail) {
            $res['BlockEmail'] = $this->blockEmail;
        }

        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }

        if (null !== $this->senderEmail) {
            $res['SenderEmail'] = $this->senderEmail;
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
        if (isset($map['BlockEmail'])) {
            $model->blockEmail = $map['BlockEmail'];
        }

        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }

        if (isset($map['SenderEmail'])) {
            $model->senderEmail = $map['SenderEmail'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class CheckDirectSendMessageSampleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $interactiveShrink;

    /**
     * @var string
     */
    public $textShrink;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'interactiveShrink' => 'Interactive',
        'textShrink' => 'Text',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->interactiveShrink) {
            $res['Interactive'] = $this->interactiveShrink;
        }

        if (null !== $this->textShrink) {
            $res['Text'] = $this->textShrink;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['Interactive'])) {
            $model->interactiveShrink = $map['Interactive'];
        }

        if (isset($map['Text'])) {
            $model->textShrink = $map['Text'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

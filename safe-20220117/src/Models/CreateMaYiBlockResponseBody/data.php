<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateMaYiBlockResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $blockId;

    /**
     * @var string
     */
    public $blockUrl;
    protected $_name = [
        'blockId' => 'BlockId',
        'blockUrl' => 'BlockUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }

        if (null !== $this->blockUrl) {
            $res['BlockUrl'] = $this->blockUrl;
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
        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }

        if (isset($map['BlockUrl'])) {
            $model->blockUrl = $map['BlockUrl'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamRequest;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var int
     */
    public $screenHeight;

    /**
     * @var int
     */
    public $screenWidth;
    protected $_name = [
        'screenHeight' => 'screenHeight',
        'screenWidth' => 'screenWidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->screenHeight) {
            $res['screenHeight'] = $this->screenHeight;
        }

        if (null !== $this->screenWidth) {
            $res['screenWidth'] = $this->screenWidth;
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
        if (isset($map['screenHeight'])) {
            $model->screenHeight = $map['screenHeight'];
        }

        if (isset($map['screenWidth'])) {
            $model->screenWidth = $map['screenWidth'];
        }

        return $model;
    }
}

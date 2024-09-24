<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest;

use AlibabaCloud\Tea\Model;

class globalIntentionList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $intention;

    /**
     * @example 1810566978021232640
     *
     * @var string
     */
    public $intentionCode;
    protected $_name = [
        'description'   => 'description',
        'intention'     => 'intention',
        'intentionCode' => 'intentionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->intention) {
            $res['intention'] = $this->intention;
        }
        if (null !== $this->intentionCode) {
            $res['intentionCode'] = $this->intentionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalIntentionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['intention'])) {
            $model->intention = $map['intention'];
        }
        if (isset($map['intentionCode'])) {
            $model->intentionCode = $map['intentionCode'];
        }

        return $model;
    }
}

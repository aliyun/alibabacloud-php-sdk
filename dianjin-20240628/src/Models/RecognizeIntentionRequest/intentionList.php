<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest;

use AlibabaCloud\Dara\Model;

class intentionList extends Model
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
     * @var string
     */
    public $intentionCode;

    /**
     * @var string
     */
    public $intentionScript;
    protected $_name = [
        'description' => 'description',
        'intention' => 'intention',
        'intentionCode' => 'intentionCode',
        'intentionScript' => 'intentionScript',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->intentionScript) {
            $res['intentionScript'] = $this->intentionScript;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['intention'])) {
            $model->intention = $map['intention'];
        }

        if (isset($map['intentionCode'])) {
            $model->intentionCode = $map['intentionCode'];
        }

        if (isset($map['intentionScript'])) {
            $model->intentionScript = $map['intentionScript'];
        }

        return $model;
    }
}

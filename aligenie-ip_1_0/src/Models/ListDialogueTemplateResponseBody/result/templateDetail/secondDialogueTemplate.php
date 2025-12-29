<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result\templateDetail;

use AlibabaCloud\Dara\Model;

class secondDialogueTemplate extends Model
{
    /**
     * @var string
     */
    public $nonzeroPriceNoAnswer;

    /**
     * @var string
     */
    public $nonzeroPriceYesAnswer;
    protected $_name = [
        'nonzeroPriceNoAnswer' => 'NonzeroPriceNoAnswer',
        'nonzeroPriceYesAnswer' => 'NonzeroPriceYesAnswer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonzeroPriceNoAnswer) {
            $res['NonzeroPriceNoAnswer'] = $this->nonzeroPriceNoAnswer;
        }

        if (null !== $this->nonzeroPriceYesAnswer) {
            $res['NonzeroPriceYesAnswer'] = $this->nonzeroPriceYesAnswer;
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
        if (isset($map['NonzeroPriceNoAnswer'])) {
            $model->nonzeroPriceNoAnswer = $map['NonzeroPriceNoAnswer'];
        }

        if (isset($map['NonzeroPriceYesAnswer'])) {
            $model->nonzeroPriceYesAnswer = $map['NonzeroPriceYesAnswer'];
        }

        return $model;
    }
}

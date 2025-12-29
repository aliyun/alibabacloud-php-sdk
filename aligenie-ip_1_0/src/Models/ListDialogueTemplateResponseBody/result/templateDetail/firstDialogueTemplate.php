<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result\templateDetail;

use AlibabaCloud\Dara\Model;

class firstDialogueTemplate extends Model
{
    /**
     * @var string
     */
    public $nonzeroPriceYesAnswer;

    /**
     * @var string
     */
    public $zeroPriceNoAnswer;

    /**
     * @var string
     */
    public $zeroPriceYesAnswer;
    protected $_name = [
        'nonzeroPriceYesAnswer' => 'NonzeroPriceYesAnswer',
        'zeroPriceNoAnswer' => 'ZeroPriceNoAnswer',
        'zeroPriceYesAnswer' => 'ZeroPriceYesAnswer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonzeroPriceYesAnswer) {
            $res['NonzeroPriceYesAnswer'] = $this->nonzeroPriceYesAnswer;
        }

        if (null !== $this->zeroPriceNoAnswer) {
            $res['ZeroPriceNoAnswer'] = $this->zeroPriceNoAnswer;
        }

        if (null !== $this->zeroPriceYesAnswer) {
            $res['ZeroPriceYesAnswer'] = $this->zeroPriceYesAnswer;
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
        if (isset($map['NonzeroPriceYesAnswer'])) {
            $model->nonzeroPriceYesAnswer = $map['NonzeroPriceYesAnswer'];
        }

        if (isset($map['ZeroPriceNoAnswer'])) {
            $model->zeroPriceNoAnswer = $map['ZeroPriceNoAnswer'];
        }

        if (isset($map['ZeroPriceYesAnswer'])) {
            $model->zeroPriceYesAnswer = $map['ZeroPriceYesAnswer'];
        }

        return $model;
    }
}

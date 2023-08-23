<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result\templateDetail;

use AlibabaCloud\Tea\Model;

class firstDialogueTemplate extends Model
{
    /**
     * @example ${goodsName}${price}元，请问需要服务员送来吗？
     *
     * @var string
     */
    public $nonzeroPriceYesAnswer;

    /**
     * @example 对不起，暂时不提供此物品。
     *
     * @var string
     */
    public $zeroPriceNoAnswer;

    /**
     * @example 好的，服务员会尽快送来。
     *
     * @var string
     */
    public $zeroPriceYesAnswer;
    protected $_name = [
        'nonzeroPriceYesAnswer' => 'NonzeroPriceYesAnswer',
        'zeroPriceNoAnswer'     => 'ZeroPriceNoAnswer',
        'zeroPriceYesAnswer'    => 'ZeroPriceYesAnswer',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return firstDialogueTemplate
     */
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

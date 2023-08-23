<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result\templateDetail;

use AlibabaCloud\Tea\Model;

class secondDialogueTemplate extends Model
{
    /**
     * @example 好的，已取消。
     *
     * @var string
     */
    public $nonzeroPriceNoAnswer;

    /**
     * @example 好的，服务员会尽快送来${goodsName}
     *
     * @var string
     */
    public $nonzeroPriceYesAnswer;
    protected $_name = [
        'nonzeroPriceNoAnswer'  => 'NonzeroPriceNoAnswer',
        'nonzeroPriceYesAnswer' => 'NonzeroPriceYesAnswer',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return secondDialogueTemplate
     */
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

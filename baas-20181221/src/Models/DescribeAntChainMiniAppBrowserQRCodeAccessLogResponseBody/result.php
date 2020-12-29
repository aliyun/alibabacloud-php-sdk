<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $accessCount;

    /**
     * @var int
     */
    public $accessAlipayAccountCount;
    protected $_name = [
        'accessCount'              => 'AccessCount',
        'accessAlipayAccountCount' => 'AccessAlipayAccountCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessCount) {
            $res['AccessCount'] = $this->accessCount;
        }
        if (null !== $this->accessAlipayAccountCount) {
            $res['AccessAlipayAccountCount'] = $this->accessAlipayAccountCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessCount'])) {
            $model->accessCount = $map['AccessCount'];
        }
        if (isset($map['AccessAlipayAccountCount'])) {
            $model->accessAlipayAccountCount = $map['AccessAlipayAccountCount'];
        }

        return $model;
    }
}

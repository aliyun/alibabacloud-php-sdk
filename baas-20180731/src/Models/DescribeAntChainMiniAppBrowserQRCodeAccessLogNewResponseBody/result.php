<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAccessLogNewResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $accessAlipayAccountCount;

    /**
     * @var int
     */
    public $accessCount;
    protected $_name = [
        'accessAlipayAccountCount' => 'AccessAlipayAccountCount',
        'accessCount'              => 'AccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessAlipayAccountCount) {
            $res['AccessAlipayAccountCount'] = $this->accessAlipayAccountCount;
        }
        if (null !== $this->accessCount) {
            $res['AccessCount'] = $this->accessCount;
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
        if (isset($map['AccessAlipayAccountCount'])) {
            $model->accessAlipayAccountCount = $map['AccessAlipayAccountCount'];
        }
        if (isset($map['AccessCount'])) {
            $model->accessCount = $map['AccessCount'];
        }

        return $model;
    }
}

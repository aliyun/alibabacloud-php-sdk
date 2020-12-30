<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadFlexRulesFileForParseResponseBody\flexFwdRules;
use AlibabaCloud\Tea\Model;

class UploadFlexRulesFileForParseResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var flexFwdRules[]
     */
    public $flexFwdRules;
    protected $_name = [
        'requestId'    => 'RequestId',
        'total'        => 'Total',
        'flexFwdRules' => 'FlexFwdRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->flexFwdRules) {
            $res['FlexFwdRules'] = [];
            if (null !== $this->flexFwdRules && \is_array($this->flexFwdRules)) {
                $n = 0;
                foreach ($this->flexFwdRules as $item) {
                    $res['FlexFwdRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFlexRulesFileForParseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['FlexFwdRules'])) {
            if (!empty($map['FlexFwdRules'])) {
                $model->flexFwdRules = [];
                $n                   = 0;
                foreach ($map['FlexFwdRules'] as $item) {
                    $model->flexFwdRules[$n++] = null !== $item ? flexFwdRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

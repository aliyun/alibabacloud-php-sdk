<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafUsageOfRulesResponseBody\sites;
use AlibabaCloud\Tea\Model;

class ListWafUsageOfRulesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The usage details of WAF rules of the website.
     *
     * @var sites[]
     */
    public $sites;
    protected $_name = [
        'requestId' => 'RequestId',
        'sites'     => 'Sites',
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
        if (null !== $this->sites) {
            $res['Sites'] = [];
            if (null !== $this->sites && \is_array($this->sites)) {
                $n = 0;
                foreach ($this->sites as $item) {
                    $res['Sites'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWafUsageOfRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sites'])) {
            if (!empty($map['Sites'])) {
                $model->sites = [];
                $n            = 0;
                foreach ($map['Sites'] as $item) {
                    $model->sites[$n++] = null !== $item ? sites::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

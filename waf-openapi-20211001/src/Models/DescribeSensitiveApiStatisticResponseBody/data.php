<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveApiStatisticResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveApiStatisticResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of personal information records involved in cross-border data transfer by domain name.
     *
     * @example 213
     *
     * @var int
     */
    public $infoOutboundCount;

    /**
     * @description The domain name-related APIs.
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description The domain name or IP address.
     *
     * @example www.***.top
     *
     * @var string
     */
    public $matchedHost;

    /**
     * @description The number of sensitive personal information records involved in cross-border data transfer by domain name.
     *
     * @example 127
     *
     * @var int
     */
    public $sensitiveOutboundCount;
    protected $_name = [
        'infoOutboundCount' => 'InfoOutboundCount',
        'list' => 'List',
        'matchedHost' => 'MatchedHost',
        'sensitiveOutboundCount' => 'SensitiveOutboundCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->infoOutboundCount) {
            $res['InfoOutboundCount'] = $this->infoOutboundCount;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }
        if (null !== $this->sensitiveOutboundCount) {
            $res['SensitiveOutboundCount'] = $this->sensitiveOutboundCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InfoOutboundCount'])) {
            $model->infoOutboundCount = $map['InfoOutboundCount'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }
        if (isset($map['SensitiveOutboundCount'])) {
            $model->sensitiveOutboundCount = $map['SensitiveOutboundCount'];
        }

        return $model;
    }
}

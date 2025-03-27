<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveApiStatisticResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveApiStatisticResponseBody\data\list_;

class data extends Model
{
    /**
     * @var int
     */
    public $infoOutboundCount;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var string
     */
    public $matchedHost;

    /**
     * @var int
     */
    public $sensitiveOutboundCount;
    protected $_name = [
        'infoOutboundCount' => 'InfoOutboundCount',
        'list' => 'List',
        'matchedHost' => 'MatchedHost',
        'sensitiveOutboundCount' => 'SensitiveOutboundCount',
    ];

    public function validate()
    {
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoOutboundCount) {
            $res['InfoOutboundCount'] = $this->infoOutboundCount;
        }

        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['List'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['List'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InfoOutboundCount'])) {
            $model->infoOutboundCount = $map['InfoOutboundCount'];
        }

        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['List'] as $item1) {
                    $model->list[$n1++] = list_::fromMap($item1);
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

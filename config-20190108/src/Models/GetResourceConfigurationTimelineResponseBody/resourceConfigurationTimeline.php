<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetResourceConfigurationTimelineResponseBody;

use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceConfigurationTimelineResponseBody\resourceConfigurationTimeline\configurationList;
use AlibabaCloud\Tea\Model;

class resourceConfigurationTimeline extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var configurationList[]
     */
    public $configurationList;
    protected $_name = [
        'nextToken'         => 'NextToken',
        'totalCount'        => 'TotalCount',
        'limit'             => 'Limit',
        'configurationList' => 'ConfigurationList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->configurationList) {
            $res['ConfigurationList'] = [];
            if (null !== $this->configurationList && \is_array($this->configurationList)) {
                $n = 0;
                foreach ($this->configurationList as $item) {
                    $res['ConfigurationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceConfigurationTimeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['ConfigurationList'])) {
            if (!empty($map['ConfigurationList'])) {
                $model->configurationList = [];
                $n                        = 0;
                foreach ($map['ConfigurationList'] as $item) {
                    $model->configurationList[$n++] = null !== $item ? configurationList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

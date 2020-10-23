<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetResourceConfigurationTimelineResponse;

use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceConfigurationTimelineResponse\resourceConfigurationTimeline\configurationList;
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
    public $limit;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var configurationList[]
     */
    public $configurationList;
    protected $_name = [
        'nextToken'         => 'NextToken',
        'limit'             => 'Limit',
        'totalCount'        => 'TotalCount',
        'configurationList' => 'ConfigurationList',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('limit', $this->limit, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('configurationList', $this->configurationList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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

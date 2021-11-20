<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineResponseBody\resourceConfigurationTimeline\configurationList;
use AlibabaCloud\Tea\Model;

class resourceConfigurationTimeline extends Model
{
    /**
     * @var configurationList[]
     */
    public $configurationList;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'configurationList' => 'ConfigurationList',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationList) {
            $res['ConfigurationList'] = [];
            if (null !== $this->configurationList && \is_array($this->configurationList)) {
                $n = 0;
                foreach ($this->configurationList as $item) {
                    $res['ConfigurationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['ConfigurationList'])) {
            if (!empty($map['ConfigurationList'])) {
                $model->configurationList = [];
                $n                        = 0;
                foreach ($map['ConfigurationList'] as $item) {
                    $model->configurationList[$n++] = null !== $item ? configurationList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}

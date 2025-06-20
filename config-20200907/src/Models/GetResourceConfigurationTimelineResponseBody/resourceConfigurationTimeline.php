<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineResponseBody\resourceConfigurationTimeline\configurationList;

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
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->configurationList)) {
            Model::validateArray($this->configurationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationList) {
            if (\is_array($this->configurationList)) {
                $res['ConfigurationList'] = [];
                $n1 = 0;
                foreach ($this->configurationList as $item1) {
                    $res['ConfigurationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationList'])) {
            if (!empty($map['ConfigurationList'])) {
                $model->configurationList = [];
                $n1 = 0;
                foreach ($map['ConfigurationList'] as $item1) {
                    $model->configurationList[$n1] = configurationList::fromMap($item1);
                    ++$n1;
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventSelectorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventSelectorsResponseBody\data\dataEventSelectorInfos;

class data extends Model
{
    /**
     * @var dataEventSelectorInfos[]
     */
    public $dataEventSelectorInfos;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'dataEventSelectorInfos' => 'DataEventSelectorInfos',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->dataEventSelectorInfos)) {
            Model::validateArray($this->dataEventSelectorInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataEventSelectorInfos) {
            if (\is_array($this->dataEventSelectorInfos)) {
                $res['DataEventSelectorInfos'] = [];
                $n1 = 0;
                foreach ($this->dataEventSelectorInfos as $item1) {
                    $res['DataEventSelectorInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataEventSelectorInfos'])) {
            if (!empty($map['DataEventSelectorInfos'])) {
                $model->dataEventSelectorInfos = [];
                $n1 = 0;
                foreach ($map['DataEventSelectorInfos'] as $item1) {
                    $model->dataEventSelectorInfos[$n1] = dataEventSelectorInfos::fromMap($item1);
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

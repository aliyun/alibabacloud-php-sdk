<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventServicesResponseBody\data\serviceInfos;

class data extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var serviceInfos[]
     */
    public $serviceInfos;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'serviceInfos' => 'ServiceInfos',
    ];

    public function validate()
    {
        if (\is_array($this->serviceInfos)) {
            Model::validateArray($this->serviceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->serviceInfos) {
            if (\is_array($this->serviceInfos)) {
                $res['ServiceInfos'] = [];
                $n1 = 0;
                foreach ($this->serviceInfos as $item1) {
                    $res['ServiceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ServiceInfos'])) {
            if (!empty($map['ServiceInfos'])) {
                $model->serviceInfos = [];
                $n1 = 0;
                foreach ($map['ServiceInfos'] as $item1) {
                    $model->serviceInfos[$n1] = serviceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

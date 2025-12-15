<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\LookupResourceGroupEventsRequest\lookupAttributes;

class LookupResourceGroupEventsRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventCategory;

    /**
     * @var lookupAttributes[]
     */
    public $lookupAttributes;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceGroupDisplayName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'eventCategory' => 'EventCategory',
        'lookupAttributes' => 'LookupAttributes',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupDisplayName' => 'ResourceGroupDisplayName',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->lookupAttributes)) {
            Model::validateArray($this->lookupAttributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventCategory) {
            $res['EventCategory'] = $this->eventCategory;
        }

        if (null !== $this->lookupAttributes) {
            if (\is_array($this->lookupAttributes)) {
                $res['LookupAttributes'] = [];
                $n1 = 0;
                foreach ($this->lookupAttributes as $item1) {
                    $res['LookupAttributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->resourceGroupDisplayName) {
            $res['ResourceGroupDisplayName'] = $this->resourceGroupDisplayName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventCategory'])) {
            $model->eventCategory = $map['EventCategory'];
        }

        if (isset($map['LookupAttributes'])) {
            if (!empty($map['LookupAttributes'])) {
                $model->lookupAttributes = [];
                $n1 = 0;
                foreach ($map['LookupAttributes'] as $item1) {
                    $model->lookupAttributes[$n1] = lookupAttributes::fromMap($item1);
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

        if (isset($map['ResourceGroupDisplayName'])) {
            $model->resourceGroupDisplayName = $map['ResourceGroupDisplayName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserInventoryEntriesRequest\filter;

class ListUserInventoryEntriesRequest extends Model
{
    /**
     * @var string
     */
    public $aliUid;
    /**
     * @var filter[]
     */
    public $filter;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'aliUid'     => 'AliUid',
        'filter'     => 'Filter',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
        'typeName'   => 'TypeName',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['Filter'] = [];
                $n1            = 0;
                foreach ($this->filter as $item1) {
                    $res['Filter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n1            = 0;
                foreach ($map['Filter'] as $item1) {
                    $model->filter[$n1++] = filter::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}

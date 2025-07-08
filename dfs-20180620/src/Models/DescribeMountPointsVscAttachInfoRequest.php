<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeMountPointsVscAttachInfoRequest\queryInfos;

class DescribeMountPointsVscAttachInfoRequest extends Model
{
    /**
     * @var string
     */
    public $inputRegionId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var queryInfos[]
     */
    public $queryInfos;

    /**
     * @var bool
     */
    public $useAssumeRoleChkServerPerm;
    protected $_name = [
        'inputRegionId' => 'InputRegionId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'queryInfos' => 'QueryInfos',
        'useAssumeRoleChkServerPerm' => 'UseAssumeRoleChkServerPerm',
    ];

    public function validate()
    {
        if (\is_array($this->queryInfos)) {
            Model::validateArray($this->queryInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->queryInfos) {
            if (\is_array($this->queryInfos)) {
                $res['QueryInfos'] = [];
                $n1 = 0;
                foreach ($this->queryInfos as $item1) {
                    $res['QueryInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->useAssumeRoleChkServerPerm) {
            $res['UseAssumeRoleChkServerPerm'] = $this->useAssumeRoleChkServerPerm;
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
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['QueryInfos'])) {
            if (!empty($map['QueryInfos'])) {
                $model->queryInfos = [];
                $n1 = 0;
                foreach ($map['QueryInfos'] as $item1) {
                    $model->queryInfos[$n1] = queryInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UseAssumeRoleChkServerPerm'])) {
            $model->useAssumeRoleChkServerPerm = $map['UseAssumeRoleChkServerPerm'];
        }

        return $model;
    }
}

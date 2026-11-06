<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudPermissionTemplatesResponseBody\cloudPermissionTemplates;

class ListCloudPermissionTemplatesResponseBody extends Model
{
    /**
     * @var cloudPermissionTemplates[]
     */
    public $cloudPermissionTemplates;

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
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cloudPermissionTemplates' => 'CloudPermissionTemplates',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->cloudPermissionTemplates)) {
            Model::validateArray($this->cloudPermissionTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudPermissionTemplates) {
            if (\is_array($this->cloudPermissionTemplates)) {
                $res['CloudPermissionTemplates'] = [];
                $n1 = 0;
                foreach ($this->cloudPermissionTemplates as $item1) {
                    $res['CloudPermissionTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CloudPermissionTemplates'])) {
            if (!empty($map['CloudPermissionTemplates'])) {
                $model->cloudPermissionTemplates = [];
                $n1 = 0;
                foreach ($map['CloudPermissionTemplates'] as $item1) {
                    $model->cloudPermissionTemplates[$n1] = cloudPermissionTemplates::fromMap($item1);
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

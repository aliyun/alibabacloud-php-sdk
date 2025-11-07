<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePackageStatesResponseBody\packageStates;

class ListInstancePackageStatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var packageStates[]
     */
    public $packageStates;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'packageStates' => 'PackageStates',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->packageStates)) {
            Model::validateArray($this->packageStates);
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

        if (null !== $this->packageStates) {
            if (\is_array($this->packageStates)) {
                $res['PackageStates'] = [];
                $n1 = 0;
                foreach ($this->packageStates as $item1) {
                    $res['PackageStates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['PackageStates'])) {
            if (!empty($map['PackageStates'])) {
                $model->packageStates = [];
                $n1 = 0;
                foreach ($map['PackageStates'] as $item1) {
                    $model->packageStates[$n1] = packageStates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

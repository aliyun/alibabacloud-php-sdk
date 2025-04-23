<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTerraformProviderVersionsResponseBody\versions;

class ListTerraformProviderVersionsResponseBody extends Model
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
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string[]
     */
    public $verisonList;

    /**
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
        'verisonList' => 'verisonList',
        'versions' => 'versions',
    ];

    public function validate()
    {
        if (\is_array($this->verisonList)) {
            Model::validateArray($this->verisonList);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        if (null !== $this->verisonList) {
            if (\is_array($this->verisonList)) {
                $res['verisonList'] = [];
                $n1 = 0;
                foreach ($this->verisonList as $item1) {
                    $res['verisonList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        if (isset($map['verisonList'])) {
            if (!empty($map['verisonList'])) {
                $model->verisonList = [];
                $n1 = 0;
                foreach ($map['verisonList'] as $item1) {
                    $model->verisonList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1++] = versions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

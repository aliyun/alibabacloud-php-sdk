<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteOverviewResponseBody\officeSiteOverviewResults;

class ListOfficeSiteOverviewResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var officeSiteOverviewResults[]
     */
    public $officeSiteOverviewResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'officeSiteOverviewResults' => 'OfficeSiteOverviewResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->officeSiteOverviewResults)) {
            Model::validateArray($this->officeSiteOverviewResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->officeSiteOverviewResults) {
            if (\is_array($this->officeSiteOverviewResults)) {
                $res['OfficeSiteOverviewResults'] = [];
                $n1 = 0;
                foreach ($this->officeSiteOverviewResults as $item1) {
                    $res['OfficeSiteOverviewResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OfficeSiteOverviewResults'])) {
            if (!empty($map['OfficeSiteOverviewResults'])) {
                $model->officeSiteOverviewResults = [];
                $n1 = 0;
                foreach ($map['OfficeSiteOverviewResults'] as $item1) {
                    $model->officeSiteOverviewResults[$n1] = officeSiteOverviewResults::fromMap($item1);
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgHonorsResponseBody\openHonors;

class QueryOrgHonorsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var openHonors[]
     */
    public $openHonors;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'  => 'nextToken',
        'openHonors' => 'openHonors',
        'requestId'  => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->openHonors)) {
            Model::validateArray($this->openHonors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->openHonors) {
            if (\is_array($this->openHonors)) {
                $res['openHonors'] = [];
                $n1                = 0;
                foreach ($this->openHonors as $item1) {
                    $res['openHonors'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['openHonors'])) {
            if (!empty($map['openHonors'])) {
                $model->openHonors = [];
                $n1                = 0;
                foreach ($map['openHonors'] as $item1) {
                    $model->openHonors[$n1++] = openHonors::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

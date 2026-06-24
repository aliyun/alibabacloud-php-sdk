<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class BatchQueryReceivedPushStatusRequest extends Model
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
     * @var string[]
     */
    public $pushNos;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'pushNos' => 'PushNos',
    ];

    public function validate()
    {
        if (\is_array($this->pushNos)) {
            Model::validateArray($this->pushNos);
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

        if (null !== $this->pushNos) {
            if (\is_array($this->pushNos)) {
                $res['PushNos'] = [];
                $n1 = 0;
                foreach ($this->pushNos as $item1) {
                    $res['PushNos'][$n1] = $item1;
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

        if (isset($map['PushNos'])) {
            if (!empty($map['PushNos'])) {
                $model->pushNos = [];
                $n1 = 0;
                foreach ($map['PushNos'] as $item1) {
                    $model->pushNos[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

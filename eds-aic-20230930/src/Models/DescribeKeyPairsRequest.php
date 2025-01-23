<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeKeyPairsRequest extends Model
{
    /**
     * @var string[]
     */
    public $keyPairIds;
    /**
     * @var string
     */
    public $keyPairName;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'keyPairIds'  => 'KeyPairIds',
        'keyPairName' => 'KeyPairName',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->keyPairIds)) {
            Model::validateArray($this->keyPairIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyPairIds) {
            if (\is_array($this->keyPairIds)) {
                $res['KeyPairIds'] = [];
                $n1                = 0;
                foreach ($this->keyPairIds as $item1) {
                    $res['KeyPairIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['KeyPairIds'])) {
            if (!empty($map['KeyPairIds'])) {
                $model->keyPairIds = [];
                $n1                = 0;
                foreach ($map['KeyPairIds'] as $item1) {
                    $model->keyPairIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}

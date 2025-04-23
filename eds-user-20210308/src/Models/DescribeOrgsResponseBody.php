<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgsResponseBody\orgs;

class DescribeOrgsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var orgs[]
     */
    public $orgs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'orgs' => 'Orgs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->orgs)) {
            Model::validateArray($this->orgs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orgs) {
            if (\is_array($this->orgs)) {
                $res['Orgs'] = [];
                $n1 = 0;
                foreach ($this->orgs as $item1) {
                    $res['Orgs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Orgs'])) {
            if (!empty($map['Orgs'])) {
                $model->orgs = [];
                $n1 = 0;
                foreach ($map['Orgs'] as $item1) {
                    $model->orgs[$n1++] = orgs::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

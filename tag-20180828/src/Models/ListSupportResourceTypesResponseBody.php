<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponseBody\supportResourceTypes;

class ListSupportResourceTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var supportResourceTypes[]
     */
    public $supportResourceTypes;
    protected $_name = [
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'supportResourceTypes' => 'SupportResourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->supportResourceTypes)) {
            Model::validateArray($this->supportResourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportResourceTypes) {
            if (\is_array($this->supportResourceTypes)) {
                $res['SupportResourceTypes'] = [];
                $n1                          = 0;
                foreach ($this->supportResourceTypes as $item1) {
                    $res['SupportResourceTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SupportResourceTypes'])) {
            if (!empty($map['SupportResourceTypes'])) {
                $model->supportResourceTypes = [];
                $n1                          = 0;
                foreach ($map['SupportResourceTypes'] as $item1) {
                    $model->supportResourceTypes[$n1++] = supportResourceTypes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

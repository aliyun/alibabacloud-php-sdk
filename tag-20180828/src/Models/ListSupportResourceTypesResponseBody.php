<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponseBody\supportResourceTypes;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportResourceTypes) {
            $res['SupportResourceTypes'] = [];
            if (null !== $this->supportResourceTypes && \is_array($this->supportResourceTypes)) {
                $n = 0;
                foreach ($this->supportResourceTypes as $item) {
                    $res['SupportResourceTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSupportResourceTypesResponseBody
     */
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
                $n                           = 0;
                foreach ($map['SupportResourceTypes'] as $item) {
                    $model->supportResourceTypes[$n++] = null !== $item ? supportResourceTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

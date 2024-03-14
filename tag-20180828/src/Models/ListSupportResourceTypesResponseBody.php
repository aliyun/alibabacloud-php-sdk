<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponseBody\supportResourceTypes;
use AlibabaCloud\Tea\Model;

class ListSupportResourceTypesResponseBody extends Model
{
    /**
     * @description Indicates whether the next query is required.
     *
     *   If the value of this parameter is empty, all results are returned, and the next query is not required.
     *   If the value of this parameter is not empty, the next query is required, and the value is the token used to start the next query.
     *
     * @example AAAAAYws9fJ0Ur4MGm****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example ABC71772-F3A1-59CA-B811-4A5B0E0B72F8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The supported resource types.
     *
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

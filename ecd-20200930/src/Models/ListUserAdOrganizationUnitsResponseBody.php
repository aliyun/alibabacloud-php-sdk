<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ListUserAdOrganizationUnitsResponseBody\OUNames;
use AlibabaCloud\Tea\Model;

class ListUserAdOrganizationUnitsResponseBody extends Model
{
    /**
     * @description A pagination token.
     *
     * @example CAAAAA==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The OUs of the AD domain.
     *
     * @var OUNames[]
     */
    public $OUNames;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'OUNames'   => 'OUNames',
        'requestId' => 'RequestId',
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
        if (null !== $this->OUNames) {
            $res['OUNames'] = [];
            if (null !== $this->OUNames && \is_array($this->OUNames)) {
                $n = 0;
                foreach ($this->OUNames as $item) {
                    $res['OUNames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserAdOrganizationUnitsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OUNames'])) {
            if (!empty($map['OUNames'])) {
                $model->OUNames = [];
                $n              = 0;
                foreach ($map['OUNames'] as $item) {
                    $model->OUNames[$n++] = null !== $item ? OUNames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

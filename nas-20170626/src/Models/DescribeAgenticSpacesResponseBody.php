<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAgenticSpacesResponseBody\agenticSpaces;

class DescribeAgenticSpacesResponseBody extends Model
{
    /**
     * @var agenticSpaces
     */
    public $agenticSpaces;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'agenticSpaces' => 'AgenticSpaces',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->agenticSpaces) {
            $this->agenticSpaces->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticSpaces) {
            $res['AgenticSpaces'] = null !== $this->agenticSpaces ? $this->agenticSpaces->toArray($noStream) : $this->agenticSpaces;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['AgenticSpaces'])) {
            $model->agenticSpaces = agenticSpaces::fromMap($map['AgenticSpaces']);
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class ListCustomDomainsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var CustomDomainResp[]
     */
    public $customDomains;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $nextOffset;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code' => 'code',
        'customDomains' => 'customDomains',
        'hasMore' => 'hasMore',
        'maxResults' => 'maxResults',
        'message' => 'message',
        'nextOffset' => 'nextOffset',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->customDomains)) {
            Model::validateArray($this->customDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->customDomains) {
            if (\is_array($this->customDomains)) {
                $res['customDomains'] = [];
                $n1 = 0;
                foreach ($this->customDomains as $item1) {
                    $res['customDomains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->nextOffset) {
            $res['nextOffset'] = $this->nextOffset;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['customDomains'])) {
            if (!empty($map['customDomains'])) {
                $model->customDomains = [];
                $n1 = 0;
                foreach ($map['customDomains'] as $item1) {
                    $model->customDomains[$n1] = CustomDomainResp::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['nextOffset'])) {
            $model->nextOffset = $map['nextOffset'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}

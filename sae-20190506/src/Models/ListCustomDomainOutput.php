<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListCustomDomainOutput extends Model
{
    /**
     * @var CustomDomain[]
     */
    public $customDomains;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customDomains' => 'customDomains',
        'nextToken'     => 'nextToken',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customDomains) {
            $res['customDomains'] = [];
            if (null !== $this->customDomains && \is_array($this->customDomains)) {
                $n = 0;
                foreach ($this->customDomains as $item) {
                    $res['customDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomDomainOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customDomains'])) {
            if (!empty($map['customDomains'])) {
                $model->customDomains = [];
                $n                    = 0;
                foreach ($map['customDomains'] as $item) {
                    $model->customDomains[$n++] = null !== $item ? CustomDomain::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListCustomDomainsResponseBody\customDomains;
use AlibabaCloud\Tea\Model;

class ListCustomDomainsResponseBody extends Model
{
    /**
     * @description The information about custom domain names.
     *
     * @var customDomains[]
     */
    public $customDomains;

    /**
     * @description The pagination token to use to request the next page of results. If the number of resources exceeds the limit, the nextToken parameter is returned. You can include the parameter in subsequent calls to obtain more results. You do not need to provide this parameter in the first call.
     *
     * @example example.com
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'customDomains' => 'customDomains',
        'nextToken'     => 'nextToken',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customDomains'])) {
            if (!empty($map['customDomains'])) {
                $model->customDomains = [];
                $n                    = 0;
                foreach ($map['customDomains'] as $item) {
                    $model->customDomains[$n++] = null !== $item ? customDomains::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}

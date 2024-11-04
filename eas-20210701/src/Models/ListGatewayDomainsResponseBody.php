<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayDomainsResponseBody\customDomains;
use AlibabaCloud\Tea\Model;

class ListGatewayDomainsResponseBody extends Model
{
    /**
     * @description The list of custom domain names.
     *
     * @var customDomains[]
     */
    public $customDomains;

    /**
     * @description The message that is returned.
     *
     * @example Successfully get custom domains
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customDomains' => 'CustomDomains',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customDomains) {
            $res['CustomDomains'] = [];
            if (null !== $this->customDomains && \is_array($this->customDomains)) {
                $n = 0;
                foreach ($this->customDomains as $item) {
                    $res['CustomDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGatewayDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomDomains'])) {
            if (!empty($map['CustomDomains'])) {
                $model->customDomains = [];
                $n                    = 0;
                foreach ($map['CustomDomains'] as $item) {
                    $model->customDomains[$n++] = null !== $item ? customDomains::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

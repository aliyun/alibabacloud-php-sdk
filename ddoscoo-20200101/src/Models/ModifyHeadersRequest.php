<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyHeadersRequest extends Model
{
    /**
     * @description The key-value pair of the custom header. Key indicates the header name and Value indicates the header value. You can specify up to five key-value pairs. The key-value pairs can be up to 200 characters in length.
     *
     * Take note of the following items:
     *
     *   Do not use X-Forwarded-ClientSrcPort as a custom header.
     *   Do not use a standard HTTP header such as User-Agent. If you use a standard HTTP header, the original header may be overwritten.
     *
     * > If you set Key to X-Forwarded-ClientSrcPort, the actual source port of the client that accesses Anti-DDoS Pro or Anti-DDoS Premium (a Layer 7 proxy) is obtained. In this case, the Value is "".
     * @example {\"X-Forwarded-ClientSrcPort\":\"\"}
     *
     * @var string
     */
    public $customHeaders;

    /**
     * @description The domain name of the website.
     *
     * > A forwarding rule must be configured for the domain name. You can call the [DescribeDomains](~~91724~~) operation to query all domain names.
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * >
     *
     *   You can query resource group IDs in the Anti-DDoS Pro or Anti-DDoS Premium console or by calling the [ListResourceGroups](~~158855~~) operation. For more information, see [View basic information of a resource group](~~151181~~).
     *
     *   Before you modify the resource group to which an instance belongs, you can call the [ListResources](~~158866~~) operation to view the current resource group of the instance.
     *
     * @example rg-acfmz6jbof5****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'customHeaders'   => 'CustomHeaders',
        'domain'          => 'Domain',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customHeaders) {
            $res['CustomHeaders'] = $this->customHeaders;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHeadersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomHeaders'])) {
            $model->customHeaders = $map['CustomHeaders'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceQuotasWithUsageRequest extends Model
{
    /**
     * @description The plan ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * @example sp-xcdn-96wblslz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The quota names in the plan. Separate the quota names with commas (,). You can query up to 10 quota names at a time. Valid values:
     *
     *   **customHttpCert**: the custom certificates.
     *   **transition_rule**: the transform rules.
     *   **waiting_room**: the waiting rooms.
     *   **https|rule_quota**: the SSL/TLS rules.
     *   **cache_rules|rule_quota**: the cache rules.
     *   **configuration_rules|rule_quota**: the configuration rules.
     *   **redirect_rules|rule_quota**: the redirect rules.
     *   **compression_rules|rule_quota**: the compression rules.
     *   **origin_rules|rule_quota**: the origin rules.
     *
     * This parameter is required.
     * @example customHttpCert
     *
     * @var string
     */
    public $quotaNames;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * @example 1232223****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'quotaNames' => 'QuotaNames',
        'siteId'     => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->quotaNames) {
            $res['QuotaNames'] = $this->quotaNames;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceQuotasWithUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QuotaNames'])) {
            $model->quotaNames = $map['QuotaNames'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallAclGroupListRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description Specifies whether VPC firewalls are configured. Valid values:
     *
     *   **notconfigured**: VPC firewalls are not configured.
     *   **configured**: VPC firewalls are configured.
     *   If you do not specify this parameter, the access control policies of all VPC firewalls are queried.
     *
     * @example configured
     *
     * @var string
     */
    public $firewallConfigureStatus;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page. Maximum value: 50.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'currentPage'             => 'CurrentPage',
        'firewallConfigureStatus' => 'FirewallConfigureStatus',
        'lang'                    => 'Lang',
        'pageSize'                => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->firewallConfigureStatus) {
            $res['FirewallConfigureStatus'] = $this->firewallConfigureStatus;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallAclGroupListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FirewallConfigureStatus'])) {
            $model->firewallConfigureStatus = $map['FirewallConfigureStatus'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

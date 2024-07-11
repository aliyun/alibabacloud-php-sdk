<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebCCRulesV2Request extends Model
{
    /**
     * @description The domain name of the website that you want to add to the Anti-DDoS Proxy instance for protection.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The number of entries that you want the system to skip before the system returns entries. Default value: **0**.
     *
     * @example 0
     *
     * @var string
     */
    public $offset;

    /**
     * @description The method used to create the rule. Valid values:
     *
     *   **manual** (default): manually created.
     *   **clover**: automatically created.
     *
     * @example manual
     *
     * @var string
     */
    public $owner;

    /**
     * @description The number of entries per page. Maximum value: **20**. Default value: **20**.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'domain'   => 'Domain',
        'offset'   => 'Offset',
        'owner'    => 'Owner',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebCCRulesV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

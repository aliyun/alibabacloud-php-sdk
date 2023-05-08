<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoginBaseConfigsRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page. Default value: **5**.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The server to which the configuration is applied. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **Target**: the UUID or group ID of the server to add or delete.
     *
     * > If targetType is set to uuid, the value of Target is the UUID of the server. If targetType is set to groupId, the value of Target is the group ID of the server. If targetType is set to global, the value of Target is a hyphen (-).
     *
     *   **targetType**: the type of the server to which the configuration is applied. Valid values:
     *
     *   **uuid**: a server
     *   **groupId**: a server group
     *   **global**: all servers
     *
     * @example [ {"target": "inet-7c676676-06fa-442e-90fb-b802e5d6****", "targetType": "uuid" } ]
     *
     * @var string
     */
    public $target;

    /**
     * @description The logon type of the configuration to query. Valid values:
     *
     *   **login\_common_location**: common logon location
     *   **login\_common_ip**: common logon IP address
     *   **login\_common_time**: common logon time range
     *   **login\_common_account**: common logon account
     *
     * @example login_common_location
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'target'      => 'Target',
        'type'        => 'Type',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoginBaseConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreCheckItemsRequest\checkAndRiskTypeList;
use AlibabaCloud\Tea\Model;

class IgnoreCheckItemsRequest extends Model
{
    /**
     * @description The risk items.
     *
     * @var checkAndRiskTypeList[]
     */
    public $checkAndRiskTypeList;

    /**
     * @description The IDs of check items.
     *
     * @var int[]
     */
    public $checkIds;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The reason why you add the risk item to the whitelist.
     *
     * @example already config in another way
     *
     * @var string
     */
    public $reason;

    /**
     * @description The data source. Valid values:
     *
     *   **default**: host baseline
     *   **agentless**: agentless baseline
     *
     * @example agentless
     *
     * @var string
     */
    public $source;

    /**
     * @description The operation that you want to perform on the risk item.Valid values:
     *  **1**: adds the risk item to the whitelist
     *  **2**: removes the risk item from the whitelist
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @description The UUIDs of the servers.
     *
     * > You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'checkAndRiskTypeList' => 'CheckAndRiskTypeList',
        'checkIds'             => 'CheckIds',
        'lang'                 => 'Lang',
        'reason'               => 'Reason',
        'source'               => 'Source',
        'type'                 => 'Type',
        'uuidList'             => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkAndRiskTypeList) {
            $res['CheckAndRiskTypeList'] = [];
            if (null !== $this->checkAndRiskTypeList && \is_array($this->checkAndRiskTypeList)) {
                $n = 0;
                foreach ($this->checkAndRiskTypeList as $item) {
                    $res['CheckAndRiskTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IgnoreCheckItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckAndRiskTypeList'])) {
            if (!empty($map['CheckAndRiskTypeList'])) {
                $model->checkAndRiskTypeList = [];
                $n                           = 0;
                foreach ($map['CheckAndRiskTypeList'] as $item) {
                    $model->checkAndRiskTypeList[$n++] = null !== $item ? checkAndRiskTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = $map['CheckIds'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}

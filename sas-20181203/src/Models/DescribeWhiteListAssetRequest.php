<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWhiteListAssetRequest extends Model
{
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
     * @description The maximum asset ID of the most recent query.
     *
     * @example 1001
     *
     * @var int
     */
    public $lastMaxId;

    /**
     * @description The number of entries per page. Maximum value: **500**. Default value: **500**. This value indicates that 500 entries are displayed on each page.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The source IP address of the request. You do not need to specify this parameter. It is automatically obtained by the system.
     *
     * @example 180.119.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the policy.
     *
     * >  You can call the [DescribeWhiteListStrategyList](~~DescribeWhiteListStrategyList~~) operation to obtain the ID.
     * @example 2730
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The policy type of the asset that you want to query. Valid values:
     *
     *   **1**: learning policy
     *   **2**: application policy
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'lang'       => 'Lang',
        'lastMaxId'  => 'LastMaxId',
        'pageSize'   => 'PageSize',
        'sourceIp'   => 'SourceIp',
        'strategyId' => 'StrategyId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lastMaxId) {
            $res['LastMaxId'] = $this->lastMaxId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWhiteListAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LastMaxId'])) {
            $model->lastMaxId = $map['LastMaxId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

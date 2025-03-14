<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyProcessWhiteListRequest extends Model
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
     * @description The MD5 hash value of the process startup file.
     *
     * >  You can call the [DescribeWhiteListProcess](~~DescribeWhiteListProcess~~) operation to obtain the MD5 hash value.
     *
     * This parameter is required.
     *
     * @example 001d7f68c3b44147988f0dc81192****
     *
     * @var string
     */
    public $md5s;

    /**
     * @description The source IP address of the request. You do not need to specify this parameter. It is automatically obtained by the system.
     *
     * @example 173.128.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The whitelist status of the process. Valid values:
     *
     *   **1**: removes a process from the whitelist.
     *   **2**: adds a process to the whitelist.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the policy.
     *
     * >  You can call the [DescribeWhiteListStrategyList](~~DescribeWhiteListStrategyList~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $strategyId;
    protected $_name = [
        'lang' => 'Lang',
        'md5s' => 'Md5s',
        'sourceIp' => 'SourceIp',
        'status' => 'Status',
        'strategyId' => 'StrategyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->md5s) {
            $res['Md5s'] = $this->md5s;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyProcessWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Md5s'])) {
            $model->md5s = $map['Md5s'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        return $model;
    }
}

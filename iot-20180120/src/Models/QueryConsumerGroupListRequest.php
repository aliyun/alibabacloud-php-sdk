<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryConsumerGroupListRequest extends Model
{
    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether to perform a fuzzy search. Valid values:
     *
     *   **true**: performs a fuzzy search. You must specify the **GroupName** parameter.
     *   **false**: queries all consumer groups of the current account.
     *
     * Default value: **false**.
     * @example false
     *
     * @var bool
     */
    public $fuzzy;

    /**
     * @description The name of the consumer group to be queried. This parameter is required if the **Fuzzy** parameter is set to **true**.
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 1000.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $subBizCode;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'fuzzy'         => 'Fuzzy',
        'groupName'     => 'GroupName',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'subBizCode'    => 'SubBizCode',
        'type'          => 'Type',
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
        if (null !== $this->fuzzy) {
            $res['Fuzzy'] = $this->fuzzy;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConsumerGroupListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Fuzzy'])) {
            $model->fuzzy = $map['Fuzzy'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

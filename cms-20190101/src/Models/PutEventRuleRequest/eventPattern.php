<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleRequest;

use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @description The keyword that is used to filter events. If the content of an event contains the specified keyword, an alert is automatically triggered.
     *
     * @example Stopping
     *
     * @var string
     */
    public $customFilters;

    /**
     * @example Exception
     *
     * @var string[]
     */
    public $eventTypeList;

    /**
     * @example CRITICAL
     *
     * @var string[]
     */
    public $levelList;

    /**
     * @example Agent_Status_Stopped
     *
     * @var string[]
     */
    public $nameList;

    /**
     * @description The type of the cloud service. Valid values of N: 1 to 50.
     *
     * >  You can call the DescribeSystemEventMetaList operation to query the cloud services that support event-triggered alerts. For more information, see [DescribeSystemEventMetaList](~~114972~~).
     * @example ecs
     *
     * @var string
     */
    public $product;

    /**
     * @description The SQL condition that is used to filter events. If the content of an event meets the specified SQL condition, an alert is automatically triggered.
     *
     * >  The syntax of SQL event filtering is consistent with the query syntax of Log Service.
     * @example 192.168.XX.XX and Executed
     *
     * @var string
     */
    public $SQLFilter;

    /**
     * @example Failed
     *
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'customFilters' => 'CustomFilters',
        'eventTypeList' => 'EventTypeList',
        'levelList'     => 'LevelList',
        'nameList'      => 'NameList',
        'product'       => 'Product',
        'SQLFilter'     => 'SQLFilter',
        'statusList'    => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customFilters) {
            $res['CustomFilters'] = $this->customFilters;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
        }
        if (null !== $this->levelList) {
            $res['LevelList'] = $this->levelList;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = $this->nameList;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->SQLFilter) {
            $res['SQLFilter'] = $this->SQLFilter;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventPattern
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomFilters'])) {
            $model->customFilters = $map['CustomFilters'];
        }
        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = $map['EventTypeList'];
            }
        }
        if (isset($map['LevelList'])) {
            if (!empty($map['LevelList'])) {
                $model->levelList = $map['LevelList'];
            }
        }
        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = $map['NameList'];
            }
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['SQLFilter'])) {
            $model->SQLFilter = $map['SQLFilter'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}

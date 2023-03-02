<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListRemindsRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that is used to receive alert notifications.
     *
     * @example 9527952795****
     *
     * @var string
     */
    public $alertTarget;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the custom alert rules.
     *
     * @example 9527952795****
     *
     * @var string
     */
    public $founder;

    /**
     * @description The ID of the node to which the custom alert rules are applied. You can use the ID to search for the custom alert rules that are applied to the node.
     *
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The number of the page to return. Valid values: 1 to 30. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The conditions that trigger an alert for the node. Valid values: FINISHED, UNFINISHED, ERROR, CYCLE_UNFINISHED, and TIMEOUT. The value FINISHED indicates that the node finishes running. The value UNFINISHED indicates that the node is still running at the specified point in time. The value ERROR indicates that an error occurs when the node is running. The value CYCLE_UNFINISHED indicates that the node does not finish running in the specified scheduling cycle. The value TIMEOUT indicates that the node times out. You can specify multiple conditions for a custom alert rule. If you specify multiple condition, separate them with commas (,).
     *
     * @example FINISHED,ERROR
     *
     * @var string
     */
    public $remindTypes;

    /**
     * @description The keyword in a rule name that is used to search for the rule. Fuzzy search is supported.
     *
     * @example Keyword
     *
     * @var string
     */
    public $searchText;
    protected $_name = [
        'alertTarget' => 'AlertTarget',
        'founder'     => 'Founder',
        'nodeId'      => 'NodeId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'remindTypes' => 'RemindTypes',
        'searchText'  => 'SearchText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTarget) {
            $res['AlertTarget'] = $this->alertTarget;
        }
        if (null !== $this->founder) {
            $res['Founder'] = $this->founder;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remindTypes) {
            $res['RemindTypes'] = $this->remindTypes;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemindsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTarget'])) {
            $model->alertTarget = $map['AlertTarget'];
        }
        if (isset($map['Founder'])) {
            $model->founder = $map['Founder'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RemindTypes'])) {
            $model->remindTypes = $map['RemindTypes'];
        }
        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        return $model;
    }
}

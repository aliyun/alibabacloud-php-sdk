<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribePlaybooksRequest extends Model
{
    /**
     * @description Activation status of the playbook. Values:
     *
     * - **1**: Indicates the playbook is activated.
     * - **0**: Indicates the playbook is not activated.
     *
     * @example 1
     *
     * @var int
     */
    public $active;

    /**
     * @description End time for the query, in 13-digit timestamp format.
     *
     * @example 1683858064361
     *
     * @var int
     */
    public $endMillis;

    /**
     * @description Specifies the language type for the request and response, default is **zh**. Values:
     * - **zh**: Chinese.
     * - **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the playbook.
     *
     * @example demo_playbook
     *
     * @var string
     */
    public $name;

    /**
     * @description The sorting logic, with a default value of **desc**. Values:
     * - **desc**: Descending order.
     * - **asc**: Ascending order.
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description Type of the playbook. Values:
     *
     * - **preset**: Predefined playbook.
     * - **user**: Custom playbook.
     *
     * @example user
     *
     * @var string
     */
    public $ownType;

    /**
     * @description Sets the page number from which to start displaying the query results. The default value is 1, indicating the first page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Specifies the maximum number of items to display per page in a paginated query. The default number of items per page is 20. If the PageSize parameter is empty, it will return 10 items by default.
     * > It is recommended that the PageSize value is not empty.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The trigger method for the playbook, with a default value of **query all**. Values:
     * - **template-incident**: Security incident.
     * - **template-ip**: IP entity.
     * - **template-file**: File entity.
     * - **template-process**: Process entity.
     * - **template-alert**: Security alert.
     * - **template-domain**: Domain entity.
     * - **template-container**: Container entity.
     * - **template-host**: Host entity.
     * - **template-custom**: Custom.
     *
     * @example template-alert
     *
     * @var string
     */
    public $paramTypes;

    /**
     * @description The UUID of the playbook.
     * > You can use the UUID to query specific playbook information.
     * > - Call the [DescribePlaybooks](~~DescribePlaybooks~~) API to obtain this parameter.
     *
     * @example 8baa6cff-319e-4ede-97bc-1xxxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description UUID List of the playbook.
     *
     * Note You can use the UUID list to query specific playbook information.
     * Call the DescribePlaybooks API to obtain this parameter.
     *
     * @example 8baa6cff-319e-4ede-97bc-1xxxxxx,7745e6cff-319e-4ede-97bc-1xxxxxx
     *
     * @var string
     */
    public $playbookUuids;

    /**
     * @description The sorting basis, with a default value of **1**. Values:
     * - **1**: Last modified time.
     * - **2**: Most recent execution time.
     *
     * @example 1
     *
     * @var string
     */
    public $sort;

    /**
     * @description Start time for the query, in 13-digit timestamp format.
     *
     * @example 1683526277415
     *
     * @var int
     */
    public $startMillis;
    protected $_name = [
        'active' => 'Active',
        'endMillis' => 'EndMillis',
        'lang' => 'Lang',
        'name' => 'Name',
        'order' => 'Order',
        'ownType' => 'OwnType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paramTypes' => 'ParamTypes',
        'playbookUuid' => 'PlaybookUuid',
        'playbookUuids' => 'PlaybookUuids',
        'sort' => 'Sort',
        'startMillis' => 'StartMillis',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->endMillis) {
            $res['EndMillis'] = $this->endMillis;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->paramTypes) {
            $res['ParamTypes'] = $this->paramTypes;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->playbookUuids) {
            $res['PlaybookUuids'] = $this->playbookUuids;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->startMillis) {
            $res['StartMillis'] = $this->startMillis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlaybooksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['EndMillis'])) {
            $model->endMillis = $map['EndMillis'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParamTypes'])) {
            $model->paramTypes = $map['ParamTypes'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['PlaybookUuids'])) {
            $model->playbookUuids = $map['PlaybookUuids'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['StartMillis'])) {
            $model->startMillis = $map['StartMillis'];
        }

        return $model;
    }
}

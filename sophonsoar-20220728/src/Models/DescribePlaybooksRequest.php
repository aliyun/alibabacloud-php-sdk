<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribePlaybooksRequest extends Model
{
    /**
     * @description The status of the playbook. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $active;

    /**
     * @description The end of the time range to query. The value is a 13-digit timestamp.
     *
     * @example 1683858064361
     *
     * @var int
     */
    public $endMillis;

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
     * @description The name of the playbook.
     *
     * @example demo_playbook
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the playbook. Valid values:
     *
     *   **preset**: predefined playbook
     *   **user**: custom playbook
     *
     * @example user
     *
     * @var string
     */
    public $ownType;

    /**
     * @description The page number. Default value: 1. Pages start from page 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. If you leave this parameter empty, 10 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The playbook UUID.
     *
     * >  You can use the UUID to query the information about a specific playbook.
     *
     *   You can call the [DescribePlaybooks](~~DescribePlaybooks~~) operation to query the playbook UUID.
     *
     * @example 8baa6cff-319e-4ede-97bc-1xxxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description The beginning of the time range to query. The value is a 13-digit timestamp.
     *
     * @example 1683526277415
     *
     * @var int
     */
    public $startMillis;
    protected $_name = [
        'active'       => 'Active',
        'endMillis'    => 'EndMillis',
        'lang'         => 'Lang',
        'name'         => 'Name',
        'ownType'      => 'OwnType',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'playbookUuid' => 'PlaybookUuid',
        'startMillis'  => 'StartMillis',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
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
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['StartMillis'])) {
            $model->startMillis = $map['StartMillis'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribePlaybooksRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $active;

    /**
     * @example 1683858064361
     *
     * @var int
     */
    public $endMillis;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example demo_playbook
     *
     * @var string
     */
    public $name;

    /**
     * @example user
     *
     * @var string
     */
    public $ownType;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 8baa6cff-319e-4ede-97bc-1xxxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
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

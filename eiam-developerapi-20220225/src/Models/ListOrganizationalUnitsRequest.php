<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class ListOrganizationalUnitsRequest extends Model
{
    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 20. Valid values: 1 to 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the parent organizational unit.
     *
     * This parameter is required.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $parentId;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'parentId' => 'parentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrganizationalUnitsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        return $model;
    }
}

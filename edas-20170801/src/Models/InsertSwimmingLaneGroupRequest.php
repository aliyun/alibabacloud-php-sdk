<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertSwimmingLaneGroupRequest extends Model
{
    /**
     * @description IDs of all applications that are related to the lane group. Separate multiple applications with commas (,).
     *
     * @example bdb251cc-02a6-48dd-891b-2ab21b25****,ee33ed0c-fddc-47b5-9f63-e1ccc4be****
     *
     * @var string
     */
    public $appIds;

    /**
     * @description The ingress application. The application is in the EDAS:{application ID} format.
     *
     * @example EDAS:5cc89013-9232-4b36-b3eb-ff89b3d2****
     *
     * @var string
     */
    public $entryApp;

    /**
     * @description The ID of the custom namespace. The ID is in the physical region ID:custom namespace identifier format. Example: cn-hangzhou:test.
     *
     * @example cn-hangzhou:test
     *
     * @var string
     */
    public $logicalRegionId;

    /**
     * @description The name of the lane group.
     *
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'appIds'          => 'AppIds',
        'entryApp'        => 'EntryApp',
        'logicalRegionId' => 'LogicalRegionId',
        'name'            => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->entryApp) {
            $res['EntryApp'] = $this->entryApp;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertSwimmingLaneGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['EntryApp'])) {
            $model->entryApp = $map['EntryApp'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

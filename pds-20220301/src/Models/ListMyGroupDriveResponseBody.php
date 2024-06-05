<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListMyGroupDriveResponseBody extends Model
{
    /**
     * @description The information about the team drives.
     *
     * @var Drive[]
     */
    public $items;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If next_marker is empty, no next page exists.
     *
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $nextMarker;

    /**
     * @var Drive
     */
    public $rootGroupDrive;
    protected $_name = [
        'items'          => 'items',
        'nextMarker'     => 'next_marker',
        'rootGroupDrive' => 'root_group_drive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextMarker) {
            $res['next_marker'] = $this->nextMarker;
        }
        if (null !== $this->rootGroupDrive) {
            $res['root_group_drive'] = null !== $this->rootGroupDrive ? $this->rootGroupDrive->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMyGroupDriveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? Drive::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['next_marker'])) {
            $model->nextMarker = $map['next_marker'];
        }
        if (isset($map['root_group_drive'])) {
            $model->rootGroupDrive = Drive::fromMap($map['root_group_drive']);
        }

        return $model;
    }
}

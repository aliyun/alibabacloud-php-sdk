<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\columns\grids;
use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @description The metadata information about the details of the instances.
     *
     * @var grids[]
     */
    public $grids;

    /**
     * @description The search condition.
     *
     * @example RegionIdShow
     *
     * @var string
     */
    public $key;

    /**
     * @description Indicates whether the search condition is used. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $search;

    /**
     * @description The value of the search condition.
     *
     * @example InstanceIdKey
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The display name of the search condition.
     *
     * @example Region
     *
     * @var string
     */
    public $showName;

    /**
     * @description The type of the check result for the instance. Valid values:
     *
     *   **text**
     *   **link**
     *
     * @example text
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'grids'     => 'Grids',
        'key'       => 'Key',
        'search'    => 'Search',
        'searchKey' => 'SearchKey',
        'showName'  => 'ShowName',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grids) {
            $res['Grids'] = [];
            if (null !== $this->grids && \is_array($this->grids)) {
                $n = 0;
                foreach ($this->grids as $item) {
                    $res['Grids'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Grids'])) {
            if (!empty($map['Grids'])) {
                $model->grids = [];
                $n            = 0;
                foreach ($map['Grids'] as $item) {
                    $model->grids[$n++] = null !== $item ? grids::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

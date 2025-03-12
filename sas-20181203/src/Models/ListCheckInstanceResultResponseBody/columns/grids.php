<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\columns;

use AlibabaCloud\Tea\Model;

class grids extends Model
{
    /**
     * @description The search condition.
     *
     * @example RegionIdShow
     *
     * @var string
     */
    public $key;

    /**
     * @description The display name of the search condition.
     *
     * @example Region
     *
     * @var string
     */
    public $showName;

    /**
     * @description The format of the check result for the instance. Valid values:
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
        'key'      => 'Key',
        'showName' => 'ShowName',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
     * @return grids
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
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

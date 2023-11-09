<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponseBody\checkDetailColumns;

use AlibabaCloud\Tea\Model;

class grids extends Model
{
    /**
     * @description Key to detect content.
     *
     * @example Username
     *
     * @var string
     */
    public $key;

    /**
     * @description The detection content key corresponds to the display name.
     *
     * @example UserName
     *
     * @var string
     */
    public $showName;

    /**
     * @description Display type. Value:
     * - **grid**：Detection grid
     * - **text**：text
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

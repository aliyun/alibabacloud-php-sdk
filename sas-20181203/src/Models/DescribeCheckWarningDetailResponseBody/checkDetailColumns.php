<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponseBody\checkDetailColumns\grids;
use AlibabaCloud\Tea\Model;

class checkDetailColumns extends Model
{
    /**
     * @description Detection content list.
     *
     * @var grids[]
     */
    public $grids;

    /**
     * @description Key to detect content.
     *
     * @example Containername
     *
     * @var string
     */
    public $key;

    /**
     * @description The detection content key corresponds to the display name.
     *
     * @example ContainerName
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
        'grids'    => 'Grids',
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
     * @return checkDetailColumns
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
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

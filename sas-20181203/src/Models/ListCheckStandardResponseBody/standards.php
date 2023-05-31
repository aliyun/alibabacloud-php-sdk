<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckStandardResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckStandardResponseBody\standards\requirements;
use AlibabaCloud\Tea\Model;

class standards extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description An array that consists of search conditions.
     *
     * @var requirements[]
     */
    public $requirements;

    /**
     * @description The display name of the check item.
     *
     * @example Identity and permission management
     *
     * @var string
     */
    public $showName;

    /**
     * @description The type of the check item.
     *
     * @example IDENTITY_PERMISSION
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'           => 'Id',
        'requirements' => 'Requirements',
        'showName'     => 'ShowName',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requirements) {
            $res['Requirements'] = [];
            if (null !== $this->requirements && \is_array($this->requirements)) {
                $n = 0;
                foreach ($this->requirements as $item) {
                    $res['Requirements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return standards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Requirements'])) {
            if (!empty($map['Requirements'])) {
                $model->requirements = [];
                $n                   = 0;
                foreach ($map['Requirements'] as $item) {
                    $model->requirements[$n++] = null !== $item ? requirements::fromMap($item) : $item;
                }
            }
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

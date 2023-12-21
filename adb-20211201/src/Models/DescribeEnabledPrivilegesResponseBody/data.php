<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEnabledPrivilegesResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEnabledPrivilegesResponseBody\data\privileges;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description of the permission level.
     *
     * @var string
     */
    public $description;

    /**
     * @description The queried permissions.
     *
     * @var privileges[]
     */
    public $privileges;

    /**
     * @description The permission level.
     *
     * @example Global
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'description' => 'Description',
        'privileges'  => 'Privileges',
        'scope'       => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->privileges) {
            $res['Privileges'] = [];
            if (null !== $this->privileges && \is_array($this->privileges)) {
                $n = 0;
                foreach ($this->privileges as $item) {
                    $res['Privileges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Privileges'])) {
            if (!empty($map['Privileges'])) {
                $model->privileges = [];
                $n                 = 0;
                foreach ($map['Privileges'] as $item) {
                    $model->privileges[$n++] = null !== $item ? privileges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}

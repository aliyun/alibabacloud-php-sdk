<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesResponseBody\instanceList\instance;

use AlibabaCloud\Tea\Model;

class standardGroup extends Model
{
    /**
     * @description The type of the control mode. Valid values:
     *
     *   **COMMON**: Security Collaboration
     *   **NONE_CONTROL**: Flexible Management
     *   **STABLE**: Stable Change
     *
     * @example COMMON
     *
     * @var string
     */
    public $groupMode;

    /**
     * @description The name of the security rule corresponding to the control mode.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupMode' => 'GroupMode',
        'groupName' => 'GroupName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupMode) {
            $res['GroupMode'] = $this->groupMode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standardGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupMode'])) {
            $model->groupMode = $map['GroupMode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}

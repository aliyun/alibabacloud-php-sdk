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

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBInstanceRequest;

use AlibabaCloud\Tea\Model;

class multiZone extends Model
{
    /**
     * @description The vSwitch IDs.
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vSwitchIds' => 'VSwitchIds',
        'zoneId' => 'ZoneId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

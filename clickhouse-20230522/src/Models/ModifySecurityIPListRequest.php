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

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityIPListRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example cc-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the whitelist whose settings you want to modify.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The modification mode.
     *
     *   0: overwrites the original IP addresses and CIDR blocks in the whitelist.
     *   1: adds the IP addresses and CIDR blocks to the whitelist.
     *   2: removes the IP addresses and CIDR blocks from the whitelist.
     *
     * >  We recommend that you set the value to 0.
     *
     * @example 0
     *
     * @var string
     */
    public $modifyMode;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IP addresses and CIDR blocks in the whitelist.
     *
     * @example 192.168.0.0/24,172.16.0.0/24
     *
     * @var string
     */
    public $securityIPList;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'groupName' => 'GroupName',
        'modifyMode' => 'ModifyMode',
        'regionId' => 'RegionId',
        'securityIPList' => 'SecurityIPList',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityIPListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        return $model;
    }
}

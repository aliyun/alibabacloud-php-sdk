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

class ModifyAccountAuthorityShrinkRequest extends Model
{
    /**
     * @description The name of the database account.
     *
     * This parameter is required.
     *
     * @example test1
     *
     * @var string
     */
    public $account;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The information about permissions.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $dmlAuthSettingShrink;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'account' => 'Account',
        'DBInstanceId' => 'DBInstanceId',
        'dmlAuthSettingShrink' => 'DmlAuthSetting',
        'regionId' => 'RegionId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dmlAuthSettingShrink) {
            $res['DmlAuthSetting'] = $this->dmlAuthSettingShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccountAuthorityShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DmlAuthSetting'])) {
            $model->dmlAuthSettingShrink = $map['DmlAuthSetting'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

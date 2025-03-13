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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStandardGroupResponseBody;

use AlibabaCloud\Tea\Model;

class standardGroup extends Model
{
    /**
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 41****
     *
     * @var int
     */
    public $groupId;

    /**
     * @example COMMON
     *
     * @var string
     */
    public $groupMode;

    /**
     * @example poc_test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 51****
     *
     * @var int
     */
    public $lastMenderId;
    protected $_name = [
        'dbType' => 'DbType',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupMode' => 'GroupMode',
        'groupName' => 'GroupName',
        'lastMenderId' => 'LastMenderId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupMode) {
            $res['GroupMode'] = $this->groupMode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->lastMenderId) {
            $res['LastMenderId'] = $this->lastMenderId;
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
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupMode'])) {
            $model->groupMode = $map['GroupMode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LastMenderId'])) {
            $model->lastMenderId = $map['LastMenderId'];
        }

        return $model;
    }
}

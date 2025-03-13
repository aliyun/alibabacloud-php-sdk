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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBResponseBody;

use AlibabaCloud\Tea\Model;

class preCheckDBList extends Model
{
    /**
     * @description The ID of the database.
     *
     * @example 43***
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The name of the database.
     *
     * @example test@localhost:3306
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The number of SQL statements.
     *
     * @example 1
     *
     * @var int
     */
    public $sqlNum;
    protected $_name = [
        'dbId' => 'DbId',
        'searchName' => 'SearchName',
        'sqlNum' => 'SqlNum',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->sqlNum) {
            $res['SqlNum'] = $this->sqlNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckDBList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['SqlNum'])) {
            $model->sqlNum = $map['SqlNum'];
        }

        return $model;
    }
}

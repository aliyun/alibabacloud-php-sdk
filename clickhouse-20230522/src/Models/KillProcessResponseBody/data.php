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

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\KillProcessResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of queries that are terminated.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The cluster ID.
     *
     * @example cc-xxxxxxx
     *
     * @var int
     */
    public $DBInstanceID;

    /**
     * @description The cluster name.
     *
     * @example cc-xxxxxxx
     *
     * @var string
     */
    public $DBInstanceName;
    protected $_name = [
        'count' => 'Count',
        'DBInstanceID' => 'DBInstanceID',
        'DBInstanceName' => 'DBInstanceName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        return $model;
    }
}

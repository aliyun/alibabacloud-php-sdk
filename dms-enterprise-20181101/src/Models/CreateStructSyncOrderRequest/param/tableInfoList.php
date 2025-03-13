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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param;

use AlibabaCloud\Tea\Model;

class tableInfoList extends Model
{
    /**
     * @description The name of the source table.
     *
     * @example test_tbl
     *
     * @var string
     */
    public $sourceTableName;

    /**
     * @description The name of the destination table.
     *
     * @example test_tbl
     *
     * @var string
     */
    public $targetTableName;
    protected $_name = [
        'sourceTableName' => 'SourceTableName',
        'targetTableName' => 'TargetTableName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }
        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }

        return $model;
    }
}

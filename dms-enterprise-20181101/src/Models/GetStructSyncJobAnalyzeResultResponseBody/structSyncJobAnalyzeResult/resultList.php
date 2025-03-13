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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult;

use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @description The SQL script.
     *
     * @var string
     */
    public $script;

    /**
     * @description The name of the source table.
     *
     * @example helloz_bak
     *
     * @var string
     */
    public $sourceTableName;

    /**
     * @description The name of the destination table.
     *
     * @example helloz_bak
     *
     * @var string
     */
    public $targetTableName;
    protected $_name = [
        'script' => 'Script',
        'sourceTableName' => 'SourceTableName',
        'targetTableName' => 'TargetTableName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
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
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }

        return $model;
    }
}

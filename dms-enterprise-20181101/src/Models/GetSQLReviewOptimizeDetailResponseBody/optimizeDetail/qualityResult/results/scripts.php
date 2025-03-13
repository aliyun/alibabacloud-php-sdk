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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody\optimizeDetail\qualityResult\results;

use AlibabaCloud\Tea\Model;

class scripts extends Model
{
    /**
     * @description The content of the SQL script.
     *
     * @example alter table xxx add index idx_xx(yyy);
     *
     * @var string
     */
    public $content;

    /**
     * @description The purpose of the SQL script. The value is set to AddIndex.
     *
     * @example AddIndex
     *
     * @var string
     */
    public $opType;

    /**
     * @description The name of the table.
     *
     * @example xxx
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'content' => 'Content',
        'opType' => 'OpType',
        'tableName' => 'TableName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scripts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}

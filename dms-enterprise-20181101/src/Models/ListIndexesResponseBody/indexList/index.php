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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesResponseBody\indexList;

use AlibabaCloud\Tea\Model;

class index extends Model
{
    /**
     * @description The description of the index.
     *
     * @example test
     *
     * @var string
     */
    public $indexComment;

    /**
     * @description The ID of the index.
     *
     * @example 1
     *
     * @var string
     */
    public $indexId;

    /**
     * @description The name of the index.
     *
     * @example idx_test
     *
     * @var string
     */
    public $indexName;

    /**
     * @description The type of the index. Valid values:
     *
     *   Primary
     *   Unique
     *   Normal
     *   FullText
     *   Spatial
     *
     * @example Primary
     *
     * @var string
     */
    public $indexType;

    /**
     * @description The ID of the table.
     *
     * @example 1
     *
     * @var string
     */
    public $tableId;
    protected $_name = [
        'indexComment' => 'IndexComment',
        'indexId' => 'IndexId',
        'indexName' => 'IndexName',
        'indexType' => 'IndexType',
        'tableId' => 'TableId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexComment) {
            $res['IndexComment'] = $this->indexComment;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->indexName) {
            $res['IndexName'] = $this->indexName;
        }
        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return index
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexComment'])) {
            $model->indexComment = $map['IndexComment'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['IndexName'])) {
            $model->indexName = $map['IndexName'];
        }
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        return $model;
    }
}

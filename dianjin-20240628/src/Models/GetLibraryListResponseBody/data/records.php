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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data\records\indexSetting;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 10
     *
     * @var int
     */
    public $documentCount;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 24vs4aa42jv1rg7
     *
     * @var string
     */
    public $id;

    /**
     * @var indexSetting
     */
    public $indexSetting;

    /**
     * @var string
     */
    public $libraryName;
    protected $_name = [
        'description' => 'description',
        'documentCount' => 'documentCount',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'indexSetting' => 'indexSetting',
        'libraryName' => 'libraryName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->documentCount) {
            $res['documentCount'] = $this->documentCount;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->indexSetting) {
            $res['indexSetting'] = null !== $this->indexSetting ? $this->indexSetting->toMap() : null;
        }
        if (null !== $this->libraryName) {
            $res['libraryName'] = $this->libraryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['documentCount'])) {
            $model->documentCount = $map['documentCount'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['indexSetting'])) {
            $model->indexSetting = indexSetting::fromMap($map['indexSetting']);
        }
        if (isset($map['libraryName'])) {
            $model->libraryName = $map['libraryName'];
        }

        return $model;
    }
}

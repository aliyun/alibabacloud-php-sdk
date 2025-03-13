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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config;

use AlibabaCloud\Tea\Model;

class selectedTables extends Model
{
    /**
     * @var string[]
     */
    public $selectedTables;
    protected $_name = [
        'selectedTables' => 'SelectedTables',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectedTables) {
            $res['SelectedTables'] = $this->selectedTables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selectedTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectedTables'])) {
            if (!empty($map['SelectedTables'])) {
                $model->selectedTables = $map['SelectedTables'];
            }
        }

        return $model;
    }
}

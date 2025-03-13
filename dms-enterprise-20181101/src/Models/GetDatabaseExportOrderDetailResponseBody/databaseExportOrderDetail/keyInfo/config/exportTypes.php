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

class exportTypes extends Model
{
    /**
     * @var string[]
     */
    public $exportTypes;
    protected $_name = [
        'exportTypes' => 'ExportTypes',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportTypes) {
            $res['ExportTypes'] = $this->exportTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exportTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportTypes'])) {
            if (!empty($map['ExportTypes'])) {
                $model->exportTypes = $map['ExportTypes'];
            }
        }

        return $model;
    }
}

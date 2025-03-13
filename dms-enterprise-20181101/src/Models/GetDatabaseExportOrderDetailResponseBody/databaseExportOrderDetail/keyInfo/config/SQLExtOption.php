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

class SQLExtOption extends Model
{
    /**
     * @var string[]
     */
    public $SQLExtOption;
    protected $_name = [
        'SQLExtOption' => 'SQLExtOption',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLExtOption) {
            $res['SQLExtOption'] = $this->SQLExtOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLExtOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLExtOption'])) {
            if (!empty($map['SQLExtOption'])) {
                $model->SQLExtOption = $map['SQLExtOption'];
            }
        }

        return $model;
    }
}

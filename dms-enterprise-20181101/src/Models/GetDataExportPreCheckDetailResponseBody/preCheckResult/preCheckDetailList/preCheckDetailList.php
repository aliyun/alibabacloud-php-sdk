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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody\preCheckResult\preCheckDetailList;

use AlibabaCloud\Tea\Model;

class preCheckDetailList extends Model
{
    /**
     * @description The estimated number of data rows to be affected.
     *
     * @example 1
     *
     * @var int
     */
    public $affectRows;

    /**
     * @description The SQL statement.
     *
     * @example SELECT * FROM tmp_table LIMIT 1
     *
     * @var string
     */
    public $SQL;
    protected $_name = [
        'affectRows' => 'AffectRows',
        'SQL' => 'SQL',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }

        return $model;
    }
}

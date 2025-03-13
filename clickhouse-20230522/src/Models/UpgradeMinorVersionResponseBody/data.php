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

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\UpgradeMinorVersionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The instance ID.
     *
     * @example cc-uf6x229yeq166****
     *
     * @var string
     */
    public $DBInstanceName;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        return $model;
    }
}

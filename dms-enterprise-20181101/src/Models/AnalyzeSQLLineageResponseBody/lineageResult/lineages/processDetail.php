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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\lineages;

use AlibabaCloud\Tea\Model;

class processDetail extends Model
{
    /**
     * @description The calculating method. Valid values:
     *
     *   **DIRECT**: No function or expression is used.
     *   **EXPR**: A function or expression is used.
     *
     * @example DIRECT
     *
     * @var string
     */
    public $calWay;

    /**
     * @description The SQL code snippet for field processing.
     *
     * @example dmstest.b.id
     *
     * @var string
     */
    public $code;
    protected $_name = [
        'calWay' => 'CalWay',
        'code' => 'Code',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->calWay) {
            $res['CalWay'] = $this->calWay;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalWay'])) {
            $model->calWay = $map['CalWay'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

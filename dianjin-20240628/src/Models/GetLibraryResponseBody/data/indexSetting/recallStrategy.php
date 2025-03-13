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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting;

use AlibabaCloud\Tea\Model;

class recallStrategy extends Model
{
    /**
     * @example model
     *
     * @var string
     */
    public $documentRankType;

    /**
     * @example 10
     *
     * @var int
     */
    public $limit;
    protected $_name = [
        'documentRankType' => 'documentRankType',
        'limit' => 'limit',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentRankType) {
            $res['documentRankType'] = $this->documentRankType;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recallStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['documentRankType'])) {
            $model->documentRankType = $map['documentRankType'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        return $model;
    }
}

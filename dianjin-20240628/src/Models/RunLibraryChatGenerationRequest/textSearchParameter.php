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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest;

use AlibabaCloud\Tea\Model;

class textSearchParameter extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @example IkMaxWord
     *
     * @var string
     */
    public $searchAnalyzerType;
    protected $_name = [
        'limit' => 'limit',
        'searchAnalyzerType' => 'searchAnalyzerType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->searchAnalyzerType) {
            $res['searchAnalyzerType'] = $this->searchAnalyzerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textSearchParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['searchAnalyzerType'])) {
            $model->searchAnalyzerType = $map['searchAnalyzerType'];
        }

        return $model;
    }
}

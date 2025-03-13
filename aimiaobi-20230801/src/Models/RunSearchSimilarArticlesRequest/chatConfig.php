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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest\chatConfig\searchParam;
use AlibabaCloud\Tea\Model;

class chatConfig extends Model
{
    /**
     * @var searchParam
     */
    public $searchParam;
    protected $_name = [
        'searchParam' => 'SearchParam',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchParam) {
            $res['SearchParam'] = null !== $this->searchParam ? $this->searchParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chatConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchParam'])) {
            $model->searchParam = searchParam::fromMap($map['SearchParam']);
        }

        return $model;
    }
}

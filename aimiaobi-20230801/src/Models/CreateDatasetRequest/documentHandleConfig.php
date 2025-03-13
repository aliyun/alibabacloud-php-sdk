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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest;

use AlibabaCloud\Tea\Model;

class documentHandleConfig extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $disableHandleMultimodalMedia;
    protected $_name = [
        'disableHandleMultimodalMedia' => 'DisableHandleMultimodalMedia',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableHandleMultimodalMedia) {
            $res['DisableHandleMultimodalMedia'] = $this->disableHandleMultimodalMedia;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documentHandleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableHandleMultimodalMedia'])) {
            $model->disableHandleMultimodalMedia = $map['DisableHandleMultimodalMedia'];
        }

        return $model;
    }
}

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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceResponseConfig\jqNodes\jqNodes;

use AlibabaCloud\Tea\Model;

class jqNodes extends Model
{
    /**
     * @example title
     *
     * @var string
     */
    public $key;

    /**
     * @example .title
     *
     * @var string
     */
    public $path;

    /**
     * @example string
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'key' => 'Key',
        'path' => 'Path',
        'type' => 'Type',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jqNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

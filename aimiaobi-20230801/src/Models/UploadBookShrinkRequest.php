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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class UploadBookShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $docsShrink;

    /**
     * @description This parameter is required.
     *
     * @example llm-ipe7d81yq4sl5jmk
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'docsShrink' => 'Docs',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->docsShrink) {
            $res['Docs'] = $this->docsShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadBookShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Docs'])) {
            $model->docsShrink = $map['Docs'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

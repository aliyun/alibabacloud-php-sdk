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

class UpdateDatasetDocumentShrinkRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $datasetId;

    /**
     * @example 数据集名称
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $documentShrink;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'documentShrink' => 'Document',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->documentShrink) {
            $res['Document'] = $this->documentShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDatasetDocumentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Document'])) {
            $model->documentShrink = $map['Document'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

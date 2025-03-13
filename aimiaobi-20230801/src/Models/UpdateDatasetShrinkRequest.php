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

class UpdateDatasetShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $datasetConfigShrink;

    /**
     * @example 企业自定义数据集
     *
     * @var string
     */
    public $datasetDescription;

    /**
     * @example 1
     *
     * @var int
     */
    public $datasetId;

    /**
     * @example 3
     *
     * @var int
     */
    public $searchDatasetEnable;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetConfigShrink' => 'DatasetConfig',
        'datasetDescription' => 'DatasetDescription',
        'datasetId' => 'DatasetId',
        'searchDatasetEnable' => 'SearchDatasetEnable',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetConfigShrink) {
            $res['DatasetConfig'] = $this->datasetConfigShrink;
        }
        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->searchDatasetEnable) {
            $res['SearchDatasetEnable'] = $this->searchDatasetEnable;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDatasetShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetConfig'])) {
            $model->datasetConfigShrink = $map['DatasetConfig'];
        }
        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['SearchDatasetEnable'])) {
            $model->searchDatasetEnable = $map['SearchDatasetEnable'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

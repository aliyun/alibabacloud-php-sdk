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

class ListSearchTaskDialogueDatasRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $includeContent;

    /**
     * @example text
     *
     * @var string
     */
    public $multimodalSearchType;

    /**
     * @example xx
     *
     * @var string
     */
    public $originalSessionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example xx
     *
     * @var string
     */
    public $query;

    /**
     * @example ClusterGenerate
     *
     * @var string
     */
    public $searchModel;

    /**
     * @example xxx
     *
     * @var string
     */
    public $searchModelDataValue;

    /**
     * @description This parameter is required.
     *
     * @example xx
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'includeContent' => 'IncludeContent',
        'multimodalSearchType' => 'MultimodalSearchType',
        'originalSessionId' => 'OriginalSessionId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'query' => 'Query',
        'searchModel' => 'SearchModel',
        'searchModelDataValue' => 'SearchModelDataValue',
        'sessionId' => 'SessionId',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeContent) {
            $res['IncludeContent'] = $this->includeContent;
        }
        if (null !== $this->multimodalSearchType) {
            $res['MultimodalSearchType'] = $this->multimodalSearchType;
        }
        if (null !== $this->originalSessionId) {
            $res['OriginalSessionId'] = $this->originalSessionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->searchModel) {
            $res['SearchModel'] = $this->searchModel;
        }
        if (null !== $this->searchModelDataValue) {
            $res['SearchModelDataValue'] = $this->searchModelDataValue;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSearchTaskDialogueDatasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeContent'])) {
            $model->includeContent = $map['IncludeContent'];
        }
        if (isset($map['MultimodalSearchType'])) {
            $model->multimodalSearchType = $map['MultimodalSearchType'];
        }
        if (isset($map['OriginalSessionId'])) {
            $model->originalSessionId = $map['OriginalSessionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['SearchModel'])) {
            $model->searchModel = $map['SearchModel'];
        }
        if (isset($map['SearchModelDataValue'])) {
            $model->searchModelDataValue = $map['SearchModelDataValue'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

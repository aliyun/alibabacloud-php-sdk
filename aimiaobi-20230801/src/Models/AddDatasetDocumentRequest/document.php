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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AddDatasetDocumentRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AddDatasetDocumentRequest\document\multimodalMedias;
use AlibabaCloud\Tea\Model;

class document extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $content;

    /**
     * @example false
     *
     * @var bool
     */
    public $disableHandleMultimodalMedia;

    /**
     * @example 业务文档唯一ID
     *
     * @var string
     */
    public $docId;

    /**
     * @example 文档类型
     *
     * @var string
     */
    public $docType;

    /**
     * @example 内部文档唯一ID
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example 扩展字段1
     *
     * @var string
     */
    public $extend1;

    /**
     * @example 扩展字段2
     *
     * @var string
     */
    public $extend2;

    /**
     * @example 扩展字段3
     *
     * @var string
     */
    public $extend3;

    /**
     * @example 模型名称 todo 商业化 仅个别账号可传入
     *
     * @var string
     */
    public $multimodalIndexName;

    /**
     * @var multimodalMedias[]
     */
    public $multimodalMedias;

    /**
     * @example 2024-12-09 13:35:40
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 来源
     *
     * @var string
     */
    public $sourceFrom;

    /**
     * @example 文章摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example xxxxx@xxxxx.com
     *
     * @var string
     */
    public $title;

    /**
     * @example xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'Content',
        'disableHandleMultimodalMedia' => 'DisableHandleMultimodalMedia',
        'docId' => 'DocId',
        'docType' => 'DocType',
        'docUuid' => 'DocUuid',
        'extend1' => 'Extend1',
        'extend2' => 'Extend2',
        'extend3' => 'Extend3',
        'multimodalIndexName' => 'MultimodalIndexName',
        'multimodalMedias' => 'MultimodalMedias',
        'pubTime' => 'PubTime',
        'sourceFrom' => 'SourceFrom',
        'summary' => 'Summary',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->disableHandleMultimodalMedia) {
            $res['DisableHandleMultimodalMedia'] = $this->disableHandleMultimodalMedia;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->extend1) {
            $res['Extend1'] = $this->extend1;
        }
        if (null !== $this->extend2) {
            $res['Extend2'] = $this->extend2;
        }
        if (null !== $this->extend3) {
            $res['Extend3'] = $this->extend3;
        }
        if (null !== $this->multimodalIndexName) {
            $res['MultimodalIndexName'] = $this->multimodalIndexName;
        }
        if (null !== $this->multimodalMedias) {
            $res['MultimodalMedias'] = [];
            if (null !== $this->multimodalMedias && \is_array($this->multimodalMedias)) {
                $n = 0;
                foreach ($this->multimodalMedias as $item) {
                    $res['MultimodalMedias'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->sourceFrom) {
            $res['SourceFrom'] = $this->sourceFrom;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return document
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DisableHandleMultimodalMedia'])) {
            $model->disableHandleMultimodalMedia = $map['DisableHandleMultimodalMedia'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['Extend1'])) {
            $model->extend1 = $map['Extend1'];
        }
        if (isset($map['Extend2'])) {
            $model->extend2 = $map['Extend2'];
        }
        if (isset($map['Extend3'])) {
            $model->extend3 = $map['Extend3'];
        }
        if (isset($map['MultimodalIndexName'])) {
            $model->multimodalIndexName = $map['MultimodalIndexName'];
        }
        if (isset($map['MultimodalMedias'])) {
            if (!empty($map['MultimodalMedias'])) {
                $model->multimodalMedias = [];
                $n = 0;
                foreach ($map['MultimodalMedias'] as $item) {
                    $model->multimodalMedias[$n++] = null !== $item ? multimodalMedias::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['SourceFrom'])) {
            $model->sourceFrom = $map['SourceFrom'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

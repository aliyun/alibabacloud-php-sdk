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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data;

use AlibabaCloud\Tea\Model;

class documents extends Model
{
    /**
     * @example 92837482364
     *
     * @var string
     */
    public $docId;

    /**
     * @example {"a":"1"}
     *
     * @var mixed[]
     */
    public $documentMeta;

    /**
     * @example pdf
     *
     * @var string
     */
    public $fileType;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example sjdhgjsd
     *
     * @var string
     */
    public $libraryId;

    /**
     * @example test
     *
     * @var string
     */
    public $title;

    /**
     * @example http://oss-xxx-hangzhou.com/test.pdf
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'docId' => 'docId',
        'documentMeta' => 'documentMeta',
        'fileType' => 'fileType',
        'gmtCreate' => 'gmtCreate',
        'libraryId' => 'libraryId',
        'title' => 'title',
        'url' => 'url',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->documentMeta) {
            $res['documentMeta'] = $this->documentMeta;
        }
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['documentMeta'])) {
            $model->documentMeta = $map['documentMeta'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

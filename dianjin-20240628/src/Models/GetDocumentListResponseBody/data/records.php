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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentListResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example 8326748346
     *
     * @var string
     */
    public $docId;

    /**
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
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example skjdhshbv
     *
     * @var string
     */
    public $libraryId;

    /**
     * @example WaitRefresh
     *
     * @var string
     */
    public $statusCode;

    /**
     * @example test
     *
     * @var string
     */
    public $title;

    /**
     * @example null
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'docId' => 'docId',
        'documentMeta' => 'documentMeta',
        'fileType' => 'fileType',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'libraryId' => 'libraryId',
        'statusCode' => 'statusCode',
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
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->statusCode) {
            $res['statusCode'] = $this->statusCode;
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
     * @return records
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
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['statusCode'])) {
            $model->statusCode = $map['statusCode'];
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

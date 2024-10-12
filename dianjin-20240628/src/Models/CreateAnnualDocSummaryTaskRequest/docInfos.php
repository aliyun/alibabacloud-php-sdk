<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateAnnualDocSummaryTaskRequest;

use AlibabaCloud\Tea\Model;

class docInfos extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 198386463432
     *
     * @var string
     */
    public $docId;

    /**
     * @description This parameter is required.
     *
     * @example 2023
     *
     * @var int
     */
    public $docYear;

    /**
     * @example 2
     *
     * @var int
     */
    public $endPage;

    /**
     * @description This parameter is required.
     *
     * @example rdxrmo6amk
     *
     * @var string
     */
    public $libraryId;

    /**
     * @example 1
     *
     * @var int
     */
    public $startPage;
    protected $_name = [
        'docId'     => 'docId',
        'docYear'   => 'docYear',
        'endPage'   => 'endPage',
        'libraryId' => 'libraryId',
        'startPage' => 'startPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->docYear) {
            $res['docYear'] = $this->docYear;
        }
        if (null !== $this->endPage) {
            $res['endPage'] = $this->endPage;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->startPage) {
            $res['startPage'] = $this->startPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['docYear'])) {
            $model->docYear = $map['docYear'];
        }
        if (isset($map['endPage'])) {
            $model->endPage = $map['endPage'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['startPage'])) {
            $model->startPage = $map['startPage'];
        }

        return $model;
    }
}

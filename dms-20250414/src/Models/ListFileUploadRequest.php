<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ListFileUploadRequest extends Model
{
    /**
     * @var string
     */
    public $callFrom;

    /**
     * @var string
     */
    public $dmsUnit;

    /**
     * @var string
     */
    public $fileCategory;

    /**
     * @var string
     */
    public $fileFrom;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sortColumn;

    /**
     * @var string
     */
    public $sortDirection;
    protected $_name = [
        'callFrom' => 'CallFrom',
        'dmsUnit' => 'DmsUnit',
        'fileCategory' => 'FileCategory',
        'fileFrom' => 'FileFrom',
        'fileId' => 'FileId',
        'sessionId' => 'SessionId',
        'sortColumn' => 'SortColumn',
        'sortDirection' => 'SortDirection',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callFrom) {
            $res['CallFrom'] = $this->callFrom;
        }

        if (null !== $this->dmsUnit) {
            $res['DmsUnit'] = $this->dmsUnit;
        }

        if (null !== $this->fileCategory) {
            $res['FileCategory'] = $this->fileCategory;
        }

        if (null !== $this->fileFrom) {
            $res['FileFrom'] = $this->fileFrom;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->sortColumn) {
            $res['SortColumn'] = $this->sortColumn;
        }

        if (null !== $this->sortDirection) {
            $res['SortDirection'] = $this->sortDirection;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallFrom'])) {
            $model->callFrom = $map['CallFrom'];
        }

        if (isset($map['DmsUnit'])) {
            $model->dmsUnit = $map['DmsUnit'];
        }

        if (isset($map['FileCategory'])) {
            $model->fileCategory = $map['FileCategory'];
        }

        if (isset($map['FileFrom'])) {
            $model->fileFrom = $map['FileFrom'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SortColumn'])) {
            $model->sortColumn = $map['SortColumn'];
        }

        if (isset($map['SortDirection'])) {
            $model->sortDirection = $map['SortDirection'];
        }

        return $model;
    }
}

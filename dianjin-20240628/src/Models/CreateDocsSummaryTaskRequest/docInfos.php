<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDocsSummaryTaskRequest;

use AlibabaCloud\Dara\Model;

class docInfos extends Model
{
    /**
     * @var string
     */
    public $docId;
    /**
     * @var int
     */
    public $endPage;
    /**
     * @var string
     */
    public $libraryId;
    /**
     * @var int
     */
    public $startPage;
    protected $_name = [
        'docId'     => 'docId',
        'endPage'   => 'endPage',
        'libraryId' => 'libraryId',
        'startPage' => 'startPage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
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

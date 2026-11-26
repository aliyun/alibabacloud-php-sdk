<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class QueryScriptHotWordListRequest extends Model
{
    /**
     * @var string
     */
    public $hotWord;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scriptRecordId;
    protected $_name = [
        'hotWord' => 'hotWord',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'scriptRecordId' => 'scriptRecordId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotWord) {
            $res['hotWord'] = $this->hotWord;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
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
        if (isset($map['hotWord'])) {
            $model->hotWord = $map['hotWord'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }

        return $model;
    }
}

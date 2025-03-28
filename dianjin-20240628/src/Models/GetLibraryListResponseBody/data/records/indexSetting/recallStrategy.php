<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data\records\indexSetting;

use AlibabaCloud\Dara\Model;

class recallStrategy extends Model
{
    /**
     * @var string
     */
    public $documentRankType;

    /**
     * @var int
     */
    public $limit;
    protected $_name = [
        'documentRankType' => 'documentRankType',
        'limit' => 'limit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentRankType) {
            $res['documentRankType'] = $this->documentRankType;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
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
        if (isset($map['documentRankType'])) {
            $model->documentRankType = $map['documentRankType'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        return $model;
    }
}

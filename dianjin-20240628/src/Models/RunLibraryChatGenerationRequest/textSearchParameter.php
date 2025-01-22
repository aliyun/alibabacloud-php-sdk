<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest;

use AlibabaCloud\Dara\Model;

class textSearchParameter extends Model
{
    /**
     * @var int
     */
    public $limit;
    /**
     * @var string
     */
    public $searchAnalyzerType;
    protected $_name = [
        'limit'              => 'limit',
        'searchAnalyzerType' => 'searchAnalyzerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->searchAnalyzerType) {
            $res['searchAnalyzerType'] = $this->searchAnalyzerType;
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
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['searchAnalyzerType'])) {
            $model->searchAnalyzerType = $map['searchAnalyzerType'];
        }

        return $model;
    }
}

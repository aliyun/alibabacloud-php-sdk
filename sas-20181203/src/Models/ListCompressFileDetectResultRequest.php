<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListCompressFileDetectResultRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $hashKey;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'hashKey'     => 'HashKey',
        'pageSize'    => 'PageSize',
        'sourceIp'    => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}

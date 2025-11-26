<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeKeyPairsRequest extends Model
{
    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'keyPairId' => 'KeyPairId',
        'keyPairName' => 'KeyPairName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

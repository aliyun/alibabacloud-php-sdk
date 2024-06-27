<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafDeOrderResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $expirationDate;

    /**
     * @var int
     */
    public $openUserType;
    protected $_name = [
        'expirationDate' => 'expirationDate',
        'openUserType'   => 'openUserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expirationDate) {
            $res['expirationDate'] = $this->expirationDate;
        }
        if (null !== $this->openUserType) {
            $res['openUserType'] = $this->openUserType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expirationDate'])) {
            $model->expirationDate = $map['expirationDate'];
        }
        if (isset($map['openUserType'])) {
            $model->openUserType = $map['openUserType'];
        }

        return $model;
    }
}

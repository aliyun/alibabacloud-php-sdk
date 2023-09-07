<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateGlobalDatabaseNetworkResponseBody extends Model
{
    /**
     * @description The ID of the GDN.
     *
     * @example gd-m5ex5wqfqbou*****
     *
     * @var string
     */
    public $GDNId;

    /**
     * @description The request ID.
     *
     * @example C61892A4-0850-4516-9E26-44D96C1782DE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'GDNId'     => 'GDNId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGlobalDatabaseNetworkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

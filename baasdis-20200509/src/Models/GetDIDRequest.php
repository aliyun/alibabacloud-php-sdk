<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models;

use AlibabaCloud\Tea\Model;

class GetDIDRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example did:mychain:xxx
     *
     * @var string
     */
    public $DID;
    protected $_name = [
        'DID' => 'DID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DID) {
            $res['DID'] = $this->DID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDIDRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DID'])) {
            $model->DID = $map['DID'];
        }

        return $model;
    }
}

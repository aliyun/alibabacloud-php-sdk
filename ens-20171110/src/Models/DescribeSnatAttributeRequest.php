<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnatAttributeRequest extends Model
{
    /**
     * @description The ID of the SNAT entry.
     *
     * This parameter is required.
     *
     * @example snat-5tc08qfj5ecblfdn2rqr9****
     *
     * @var string
     */
    public $snatEntryId;
    protected $_name = [
        'snatEntryId' => 'SnatEntryId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnatAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }

        return $model;
    }
}

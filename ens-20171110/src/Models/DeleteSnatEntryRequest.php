<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteSnatEntryRequest extends Model
{
    /**
     * @description The ID of the SNAT entry that you want to delete.
     *
     * This parameter is required.
     * @example snat-5tfi6f8gds82mjmlofeym****
     *
     * @var string
     */
    public $snatEntryId;
    protected $_name = [
        'snatEntryId' => 'SnatEntryId',
    ];

    public function validate()
    {
    }

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
     * @return DeleteSnatEntryRequest
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

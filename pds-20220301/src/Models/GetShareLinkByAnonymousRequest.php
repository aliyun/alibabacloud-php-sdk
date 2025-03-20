<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetShareLinkByAnonymousRequest extends Model
{
    /**
     * @description The share ID.
     *
     * This parameter is required.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;
    protected $_name = [
        'shareId' => 'share_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetShareLinkByAnonymousRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }

        return $model;
    }
}

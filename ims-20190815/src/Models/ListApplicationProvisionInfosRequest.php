<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationProvisionInfosRequest extends Model
{
    /**
     * @description The source of the applications. Valid values:
     *
     *   inner: The applications are from the current account.
     *   external: The applications are from other accounts.
     *
     * @example external
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationProvisionInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}

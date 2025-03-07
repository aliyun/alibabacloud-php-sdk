<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetSourceLocationRequest extends Model
{
    /**
     * @description The name of the source location.
     *
     * This parameter is required.
     * @example MySourceLocation
     *
     * @var string
     */
    public $sourceLocationName;
    protected $_name = [
        'sourceLocationName' => 'SourceLocationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSourceLocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteSourceLocationRequest extends Model
{
    /**
     * @description Specifies whether to use delete markers.
     *
     * @example true
     *
     * @var bool
     */
    public $softDelete;

    /**
     * @description The name of the source location.
     *
     * This parameter is required.
     *
     * @example MySourceLocation
     *
     * @var string
     */
    public $sourceLocationName;
    protected $_name = [
        'softDelete' => 'SoftDelete',
        'sourceLocationName' => 'SourceLocationName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->softDelete) {
            $res['SoftDelete'] = $this->softDelete;
        }
        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSourceLocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SoftDelete'])) {
            $model->softDelete = $map['SoftDelete'];
        }
        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }

        return $model;
    }
}

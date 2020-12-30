<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DeletePkgVersionRequest extends Model
{
    /**
     * @var string
     */
    public $pkgVersionId;
    protected $_name = [
        'pkgVersionId' => 'PkgVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pkgVersionId) {
            $res['PkgVersionId'] = $this->pkgVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePkgVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PkgVersionId'])) {
            $model->pkgVersionId = $map['PkgVersionId'];
        }

        return $model;
    }
}

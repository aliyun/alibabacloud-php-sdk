<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CancelCdsFileShareLinkRequest extends Model
{
    /**
     * @description The ID of the cloud disk.
     *
     * @example cn-hangzhou+cds-352282****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The ID of the file sharing task.
     *
     * @example 7JQX1Fsw****
     *
     * @var string
     */
    public $shareId;
    protected $_name = [
        'cdsId'   => 'CdsId',
        'shareId' => 'ShareId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->shareId) {
            $res['ShareId'] = $this->shareId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelCdsFileShareLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['ShareId'])) {
            $model->shareId = $map['ShareId'];
        }

        return $model;
    }
}

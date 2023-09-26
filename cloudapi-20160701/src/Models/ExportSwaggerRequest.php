<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\Tea\Model;

class ExportSwaggerRequest extends Model
{
    /**
     * @var string
     */
    public $apiUid;

    /**
     * @var string
     */
    public $dataFormat;
    protected $_name = [
        'apiUid'     => 'ApiUid',
        'dataFormat' => 'DataFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportSwaggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }

        return $model;
    }
}

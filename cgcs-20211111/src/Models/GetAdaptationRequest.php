<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class GetAdaptationRequest extends Model
{
    /**
     * @var int
     */
    public $adaptApplyId;

    /**
     * @var string
     */
    public $appVersionId;
    protected $_name = [
        'adaptApplyId' => 'AdaptApplyId',
        'appVersionId' => 'AppVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptApplyId) {
            $res['AdaptApplyId'] = $this->adaptApplyId;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAdaptationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptApplyId'])) {
            $model->adaptApplyId = $map['AdaptApplyId'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }

        return $model;
    }
}

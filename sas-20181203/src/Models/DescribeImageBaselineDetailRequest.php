<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageBaselineDetailRequest extends Model
{
    /**
     * @var string
     */
    public $baselineItemKey;

    /**
     * @var string
     */
    public $imageUuid;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'baselineItemKey' => 'BaselineItemKey',
        'imageUuid'       => 'ImageUuid',
        'lang'            => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineItemKey) {
            $res['BaselineItemKey'] = $this->baselineItemKey;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageBaselineDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineItemKey'])) {
            $model->baselineItemKey = $map['BaselineItemKey'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}

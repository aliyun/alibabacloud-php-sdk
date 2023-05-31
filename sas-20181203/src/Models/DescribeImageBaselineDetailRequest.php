<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageBaselineDetailRequest extends Model
{
    /**
     * @description The information about the baseline.
     *
     * @example Valid values include but are not limited to ak_leak, duplicate_uid, duplicate_pwd_hash, and non_pwd_user.
     *
     * @var string
     */
    public $baselineItemKey;

    /**
     * @description The UUID of the image.
     *
     * @example 06293273b67d19516cfcc712194f****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
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

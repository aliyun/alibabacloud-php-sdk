<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody\transcodeData\transcodeDataItem\data;

use AlibabaCloud\Tea\Model;

class dataItem extends Model
{
    /**
     * @description The transcoding specification. Valid values:
     *
     *   **Audio**: audio transcoding
     *   **Segmentation**: container format conversion
     *   **H264.LD, H264.SD, H264.HD, H264.2K, H264.4K, and more**
     *
     * @example H264.SD
     *
     * @var string
     */
    public $name;

    /**
     * @description The transcoding duration. Unit: seconds.
     *
     * @example 111
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

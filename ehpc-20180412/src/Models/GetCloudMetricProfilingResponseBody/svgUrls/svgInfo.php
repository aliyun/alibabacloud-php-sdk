<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricProfilingResponseBody\svgUrls;

use AlibabaCloud\Tea\Model;

class svgInfo extends Model
{
    /**
     * @description The name of the SVG file that contains the profiling results.
     *
     * @example ehpc-hz-faRavbPf6b_i-bdrftgyh890654****_21687_2019-09-09-02-37-40.bottomup.svg
     *
     * @var string
     */
    public $name;

    /**
     * @description The size of the SVG file. Unit: bytes.
     *
     * @example 648
     *
     * @var int
     */
    public $size;

    /**
     * @description The type of the SVG file.
     *
     * @example file
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the Object Storage Service (OSS) bucket where the scalable vector graphics (SVG) file is stored.
     *
     * @example https://cloudmetrics-****-hz.oss-cn-hangzhou.aliyuncs.com/112****\/ehpc-hz-faRavb****njuik%Oxlftyhujmi0Y****
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'name' => 'Name',
        'size' => 'Size',
        'type' => 'Type',
        'url'  => 'Url',
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return svgInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateWatermarkRequest extends Model
{
    /**
     * @description The ID of the watermark.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the watermark.
     *
     * @example {"Width":"55","Height":"55","Dx":"9","Dy":"9","ReferPos":"BottonLeft","Type":"Image"}
     *
     * @var string
     */
    public $watermarkConfig;

    /**
     * @description The configurations such as the position and effect of the text watermark or image watermark. The value is a JSON-formatted string.
     *
     * > The value of this parameter varies with the watermark type. For more information about the data structure, see the "WatermarkConfig" section of the [Media processing parameters](~~98618~~) topic.
     * @example af2afe4761992c*****bd947dae97337
     *
     * @var string
     */
    public $watermarkId;
    protected $_name = [
        'name'            => 'Name',
        'watermarkConfig' => 'WatermarkConfig',
        'watermarkId'     => 'WatermarkId',
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
        if (null !== $this->watermarkConfig) {
            $res['WatermarkConfig'] = $this->watermarkConfig;
        }
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WatermarkConfig'])) {
            $model->watermarkConfig = $map['WatermarkConfig'];
        }
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }

        return $model;
    }
}

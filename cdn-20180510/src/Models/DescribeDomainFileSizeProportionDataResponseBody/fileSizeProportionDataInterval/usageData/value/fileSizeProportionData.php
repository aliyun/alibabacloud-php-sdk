<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainFileSizeProportionDataResponseBody\fileSizeProportionDataInterval\usageData\value;

use AlibabaCloud\Tea\Model;

class fileSizeProportionData extends Model
{
    /**
     * @var string
     */
    public $proportion;

    /**
     * @var string
     */
    public $fileSize;
    protected $_name = [
        'proportion' => 'Proportion',
        'fileSize'   => 'FileSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSizeProportionData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        return $model;
    }
}

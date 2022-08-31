<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainFileSizeProportionDataResponseBody\fileSizeProportionDataInterval\usageData\value;

use AlibabaCloud\Tea\Model;

class fileSizeProportionData extends Model
{
    /**
     * @var string
     */
    public $fileSize;

    /**
     * @var string
     */
    public $proportion;
    protected $_name = [
        'fileSize'   => 'FileSize',
        'proportion' => 'Proportion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
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
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }

        return $model;
    }
}

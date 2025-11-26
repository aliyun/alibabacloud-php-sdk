<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ImportImageRequest;

use AlibabaCloud\Dara\Model;

class diskDeviceMapping extends Model
{
    /**
     * @var string
     */
    public $OSSBucket;

    /**
     * @var string
     */
    public $OSSObject;

    /**
     * @var string
     */
    public $OSSRegion;
    protected $_name = [
        'OSSBucket' => 'OSSBucket',
        'OSSObject' => 'OSSObject',
        'OSSRegion' => 'OSSRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }

        if (null !== $this->OSSObject) {
            $res['OSSObject'] = $this->OSSObject;
        }

        if (null !== $this->OSSRegion) {
            $res['OSSRegion'] = $this->OSSRegion;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }

        if (isset($map['OSSObject'])) {
            $model->OSSObject = $map['OSSObject'];
        }

        if (isset($map['OSSRegion'])) {
            $model->OSSRegion = $map['OSSRegion'];
        }

        return $model;
    }
}

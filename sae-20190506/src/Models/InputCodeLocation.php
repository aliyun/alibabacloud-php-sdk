<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class InputCodeLocation extends Model
{
    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossObjectName;

    /**
     * @var string
     */
    public $zipFile;
    protected $_name = [
        'ossBucketName' => 'ossBucketName',
        'ossObjectName' => 'ossObjectName',
        'zipFile'       => 'zipFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossBucketName) {
            $res['ossBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossObjectName) {
            $res['ossObjectName'] = $this->ossObjectName;
        }
        if (null !== $this->zipFile) {
            $res['zipFile'] = $this->zipFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InputCodeLocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ossBucketName'])) {
            $model->ossBucketName = $map['ossBucketName'];
        }
        if (isset($map['ossObjectName'])) {
            $model->ossObjectName = $map['ossObjectName'];
        }
        if (isset($map['zipFile'])) {
            $model->zipFile = $map['zipFile'];
        }

        return $model;
    }
}

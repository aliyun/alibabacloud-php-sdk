<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetUploadCredentialsRequest extends Model
{
    /**
     * @description The file name to upload.
     *
     * This parameter is required.
     * @example template.yaml
     *
     * @var string
     */
    public $fileName;

    /**
     * @description Specifies whether the file is publicly accessible. Valid values: **public** or **private**. The default value is **private**.
     *
     * @example public
     *
     * @var string
     */
    public $visibility;
    protected $_name = [
        'fileName'   => 'FileName',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadCredentialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}

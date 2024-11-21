<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetRoutineStagingCodeUploadInfoRequest extends Model
{
    /**
     * @description The code description.
     *
     * @example the description of code
     *
     * @var string
     */
    public $codeDescription;

    /**
     * @description The routine name.
     *
     * @example GetRoutineStagingCodeUploadInfo
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'codeDescription' => 'CodeDescription',
        'name'            => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeDescription) {
            $res['CodeDescription'] = $this->codeDescription;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoutineStagingCodeUploadInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeDescription'])) {
            $model->codeDescription = $map['CodeDescription'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

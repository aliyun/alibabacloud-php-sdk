<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateBatchUploadUrlRequest extends Model
{
    /**
     * @description The identifiers of files. Only MD5 hash values are supported.
     *
     * This parameter is required.
     * @var string[]
     */
    public $md5List;

    /**
     * @description The type of the file. Valid values:
     *
     *   **0**: unknown file
     *   **1**: binary file
     *   **2**: webshell file
     *   **4**: script file
     *
     * > If you do not know the type of the file, set this parameter to **0**.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'md5List' => 'Md5List',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->md5List) {
            $res['Md5List'] = $this->md5List;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBatchUploadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Md5List'])) {
            if (!empty($map['Md5List'])) {
                $model->md5List = $map['Md5List'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

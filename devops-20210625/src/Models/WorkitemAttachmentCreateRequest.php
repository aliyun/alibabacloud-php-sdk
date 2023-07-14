<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class WorkitemAttachmentCreateRequest extends Model
{
    /**
     * @example 1106473328927498/1106473328927498/5ec071g0e5ij85fche8cddchje.xlsx
     *
     * @var string
     */
    public $fileKey;

    /**
     * @example xxx.tgz
     *
     * @var string
     */
    public $originalFilename;
    protected $_name = [
        'fileKey'          => 'fileKey',
        'originalFilename' => 'originalFilename',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['fileKey'] = $this->fileKey;
        }
        if (null !== $this->originalFilename) {
            $res['originalFilename'] = $this->originalFilename;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WorkitemAttachmentCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileKey'])) {
            $model->fileKey = $map['fileKey'];
        }
        if (isset($map['originalFilename'])) {
            $model->originalFilename = $map['originalFilename'];
        }

        return $model;
    }
}

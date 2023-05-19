<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dop\V20221130\Models\GetOssMetaListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20221226
     *
     * @var string
     */
    public $ds;

    /**
     * @var string[]
     */
    public $fileNames;

    /**
     * @example 12345
     *
     * @var string
     */
    public $fileSize;

    /**
     * @example 100
     *
     * @var string
     */
    public $rows;
    protected $_name = [
        'ds'        => 'ds',
        'fileNames' => 'fileNames',
        'fileSize'  => 'fileSize',
        'rows'      => 'rows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ds) {
            $res['ds'] = $this->ds;
        }
        if (null !== $this->fileNames) {
            $res['fileNames'] = $this->fileNames;
        }
        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }
        if (null !== $this->rows) {
            $res['rows'] = $this->rows;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ds'])) {
            $model->ds = $map['ds'];
        }
        if (isset($map['fileNames'])) {
            if (!empty($map['fileNames'])) {
                $model->fileNames = $map['fileNames'];
            }
        }
        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }
        if (isset($map['rows'])) {
            $model->rows = $map['rows'];
        }

        return $model;
    }
}

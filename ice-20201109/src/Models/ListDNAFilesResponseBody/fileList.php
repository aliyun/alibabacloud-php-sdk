<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListDNAFilesResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNAFilesResponseBody\fileList\inputFile;
use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @description The Object Storage Service (OSS) information about the input file.
     *
     * @var inputFile
     */
    public $inputFile;

    /**
     * @description The primary key of the file.
     *
     * @example ae0fd49c0840e14daf0d66a75b83****
     *
     * @var string
     */
    public $primaryKey;
    protected $_name = [
        'inputFile'  => 'InputFile',
        'primaryKey' => 'PrimaryKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toMap() : null;
        }
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        return $model;
    }
}

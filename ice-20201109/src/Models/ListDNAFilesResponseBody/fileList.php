<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListDNAFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNAFilesResponseBody\fileList\inputFile;

class fileList extends Model
{
    /**
     * @var inputFile
     */
    public $inputFile;
    /**
     * @var string
     */
    public $primaryKey;
    protected $_name = [
        'inputFile'  => 'InputFile',
        'primaryKey' => 'PrimaryKey',
    ];

    public function validate()
    {
        if (null !== $this->inputFile) {
            $this->inputFile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toArray($noStream) : $this->inputFile;
        }

        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
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
        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }

        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        return $model;
    }
}

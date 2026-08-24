<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class UpdateVirusFileStatusRequest extends Model
{
    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $fileMd5;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $virusType;
    protected $_name = [
        'devTag' => 'DevTag',
        'fileMd5' => 'FileMd5',
        'filePath' => 'FilePath',
        'operation' => 'Operation',
        'virusType' => 'VirusType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->virusType) {
            $res['VirusType'] = $this->virusType;
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
        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['VirusType'])) {
            $model->virusType = $map['VirusType'];
        }

        return $model;
    }
}

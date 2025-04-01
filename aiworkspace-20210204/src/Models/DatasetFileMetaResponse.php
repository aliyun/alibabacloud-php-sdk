<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class DatasetFileMetaResponse extends Model
{
    /**
     * @var string
     */
    public $datasetFileMetaId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'datasetFileMetaId' => 'DatasetFileMetaId',
        'result' => 'Result',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetFileMetaId) {
            $res['DatasetFileMetaId'] = $this->datasetFileMetaId;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['DatasetFileMetaId'])) {
            $model->datasetFileMetaId = $map['DatasetFileMetaId'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}

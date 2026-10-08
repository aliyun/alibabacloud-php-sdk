<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSourceTableMetaResponseBody\data;

use AlibabaCloud\Dara\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $pk;

    /**
     * @var bool
     */
    public $pt;

    /**
     * @var string
     */
    public $rawDataType;

    /**
     * @var int
     */
    public $seqNumber;
    protected $_name = [
        'comment' => 'Comment',
        'dataType' => 'DataType',
        'name' => 'Name',
        'pk' => 'Pk',
        'pt' => 'Pt',
        'rawDataType' => 'RawDataType',
        'seqNumber' => 'SeqNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->pt) {
            $res['Pt'] = $this->pt;
        }

        if (null !== $this->rawDataType) {
            $res['RawDataType'] = $this->rawDataType;
        }

        if (null !== $this->seqNumber) {
            $res['SeqNumber'] = $this->seqNumber;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Pt'])) {
            $model->pt = $map['Pt'];
        }

        if (isset($map['RawDataType'])) {
            $model->rawDataType = $map['RawDataType'];
        }

        if (isset($map['SeqNumber'])) {
            $model->seqNumber = $map['SeqNumber'];
        }

        return $model;
    }
}

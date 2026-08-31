<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsResponseBody\pageResult\resultData\versionList\apiInfo;

use AlibabaCloud\Dara\Model;

class responseParamList extends Model
{
    /**
     * @var string
     */
    public $dateFormat;

    /**
     * @var string
     */
    public $descr;

    /**
     * @var bool
     */
    public $isUrl;

    /**
     * @var string
     */
    public $mappingColumn;

    /**
     * @var string
     */
    public $originalColumn;

    /**
     * @var string
     */
    public $paramName;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $sample;

    /**
     * @var string
     */
    public $seqNum;
    protected $_name = [
        'dateFormat' => 'DateFormat',
        'descr' => 'Descr',
        'isUrl' => 'IsUrl',
        'mappingColumn' => 'MappingColumn',
        'originalColumn' => 'OriginalColumn',
        'paramName' => 'ParamName',
        'paramType' => 'ParamType',
        'sample' => 'Sample',
        'seqNum' => 'SeqNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateFormat) {
            $res['DateFormat'] = $this->dateFormat;
        }

        if (null !== $this->descr) {
            $res['Descr'] = $this->descr;
        }

        if (null !== $this->isUrl) {
            $res['IsUrl'] = $this->isUrl;
        }

        if (null !== $this->mappingColumn) {
            $res['MappingColumn'] = $this->mappingColumn;
        }

        if (null !== $this->originalColumn) {
            $res['OriginalColumn'] = $this->originalColumn;
        }

        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }

        if (null !== $this->seqNum) {
            $res['SeqNum'] = $this->seqNum;
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
        if (isset($map['DateFormat'])) {
            $model->dateFormat = $map['DateFormat'];
        }

        if (isset($map['Descr'])) {
            $model->descr = $map['Descr'];
        }

        if (isset($map['IsUrl'])) {
            $model->isUrl = $map['IsUrl'];
        }

        if (isset($map['MappingColumn'])) {
            $model->mappingColumn = $map['MappingColumn'];
        }

        if (isset($map['OriginalColumn'])) {
            $model->originalColumn = $map['OriginalColumn'];
        }

        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }

        if (isset($map['SeqNum'])) {
            $model->seqNum = $map['SeqNum'];
        }

        return $model;
    }
}

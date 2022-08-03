<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class OutputSerialization extends Model
{
    /**
     * @var CSVOutput
     */
    public $csv;

    /**
     * @var bool
     */
    public $enablePayloadCrc;

    /**
     * @var JSONOutput
     */
    public $json;

    /**
     * @var bool
     */
    public $keepAllColumns;

    /**
     * @var bool
     */
    public $outputHeader;

    /**
     * @var bool
     */
    public $outputRawData;
    protected $_name = [
        'csv'              => 'CSV',
        'enablePayloadCrc' => 'EnablePayloadCrc',
        'json'             => 'JSON',
        'keepAllColumns'   => 'KeepAllColumns',
        'outputHeader'     => 'OutputHeader',
        'outputRawData'    => 'OutputRawData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csv) {
            $res['CSV'] = null !== $this->csv ? $this->csv->toMap() : null;
        }
        if (null !== $this->enablePayloadCrc) {
            $res['EnablePayloadCrc'] = $this->enablePayloadCrc;
        }
        if (null !== $this->json) {
            $res['JSON'] = null !== $this->json ? $this->json->toMap() : null;
        }
        if (null !== $this->keepAllColumns) {
            $res['KeepAllColumns'] = $this->keepAllColumns;
        }
        if (null !== $this->outputHeader) {
            $res['OutputHeader'] = $this->outputHeader;
        }
        if (null !== $this->outputRawData) {
            $res['OutputRawData'] = $this->outputRawData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OutputSerialization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CSV'])) {
            $model->csv = CSVOutput::fromMap($map['CSV']);
        }
        if (isset($map['EnablePayloadCrc'])) {
            $model->enablePayloadCrc = $map['EnablePayloadCrc'];
        }
        if (isset($map['JSON'])) {
            $model->json = JSONOutput::fromMap($map['JSON']);
        }
        if (isset($map['KeepAllColumns'])) {
            $model->keepAllColumns = $map['KeepAllColumns'];
        }
        if (isset($map['OutputHeader'])) {
            $model->outputHeader = $map['OutputHeader'];
        }
        if (isset($map['OutputRawData'])) {
            $model->outputRawData = $map['OutputRawData'];
        }

        return $model;
    }
}

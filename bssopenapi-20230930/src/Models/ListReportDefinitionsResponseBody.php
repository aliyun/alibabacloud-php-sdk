<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListReportDefinitionsResponseBody\reportDefinitions;

class ListReportDefinitionsResponseBody extends Model
{
    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var reportDefinitions[]
     */
    public $reportDefinitions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metadata' => 'Metadata',
        'reportDefinitions' => 'ReportDefinitions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->reportDefinitions)) {
            Model::validateArray($this->reportDefinitions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->reportDefinitions) {
            if (\is_array($this->reportDefinitions)) {
                $res['ReportDefinitions'] = [];
                $n1 = 0;
                foreach ($this->reportDefinitions as $item1) {
                    $res['ReportDefinitions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['ReportDefinitions'])) {
            if (!empty($map['ReportDefinitions'])) {
                $model->reportDefinitions = [];
                $n1 = 0;
                foreach ($map['ReportDefinitions'] as $item1) {
                    $model->reportDefinitions[$n1++] = reportDefinitions::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

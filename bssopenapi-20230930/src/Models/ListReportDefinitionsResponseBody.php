<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListReportDefinitionsResponseBody\reportDefinitions;
use AlibabaCloud\Tea\Model;

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
     * @example 79EE7556-0CFD-44EB-9CD6-B3B526E3A85F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metadata' => 'Metadata',
        'reportDefinitions' => 'ReportDefinitions',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->reportDefinitions) {
            $res['ReportDefinitions'] = [];
            if (null !== $this->reportDefinitions && \is_array($this->reportDefinitions)) {
                $n = 0;
                foreach ($this->reportDefinitions as $item) {
                    $res['ReportDefinitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListReportDefinitionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['ReportDefinitions'])) {
            if (!empty($map['ReportDefinitions'])) {
                $model->reportDefinitions = [];
                $n = 0;
                foreach ($map['ReportDefinitions'] as $item) {
                    $model->reportDefinitions[$n++] = null !== $item ? reportDefinitions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

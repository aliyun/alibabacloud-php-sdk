<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Number of documents.
     *
     * @example 10
     *
     * @var int
     */
    public $documentCount;

    /**
     * @description Number of services or days.
     *
     * @example 10
     *
     * @var int
     */
    public $frequency;
    protected $_name = [
        'documentCount' => 'DocumentCount',
        'frequency'     => 'Frequency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentCount) {
            $res['DocumentCount'] = $this->documentCount;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
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
        if (isset($map['DocumentCount'])) {
            $model->documentCount = $map['DocumentCount'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $documentCount;
    /**
     * @var int
     */
    public $frequency;
    protected $_name = [
        'documentCount' => 'DocumentCount',
        'frequency'     => 'Frequency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

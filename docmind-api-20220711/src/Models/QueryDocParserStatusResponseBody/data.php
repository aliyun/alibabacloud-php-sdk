<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\QueryDocParserStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $numberOfSuccessfulParsing;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'numberOfSuccessfulParsing' => 'NumberOfSuccessfulParsing',
        'status'                    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->numberOfSuccessfulParsing) {
            $res['NumberOfSuccessfulParsing'] = $this->numberOfSuccessfulParsing;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['NumberOfSuccessfulParsing'])) {
            $model->numberOfSuccessfulParsing = $map['NumberOfSuccessfulParsing'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

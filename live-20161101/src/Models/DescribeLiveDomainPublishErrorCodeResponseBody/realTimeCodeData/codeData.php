<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPublishErrorCodeResponseBody\realTimeCodeData;

use AlibabaCloud\Tea\Model;

class codeData extends Model
{
    /**
     * @description The response code. Valid values:
     *
     *   3: The data read timed out.
     *   4: A data write error occurred.
     *   6: The data write timed out.
     *   200: The request is successful.
     *   500: An unknown internal error occurred.
     *   501: The stream ingest failed.
     *   502: The signaling operation timed out.
     *   401: A stream ingest parameter is invalid.
     *   403: The stream ingest authentication failed.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The number of times the HTTP status code was returned.
     *
     * @example 20
     *
     * @var string
     */
    public $count;

    /**
     * @description The proportion of the HTTP status code.
     *
     * @example 66.04
     *
     * @var string
     */
    public $proportion;
    protected $_name = [
        'code' => 'Code',
        'count' => 'Count',
        'proportion' => 'Proportion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return codeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }

        return $model;
    }
}

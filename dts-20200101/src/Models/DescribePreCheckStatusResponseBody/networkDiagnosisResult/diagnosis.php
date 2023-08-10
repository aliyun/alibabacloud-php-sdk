<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\networkDiagnosisResult;

use AlibabaCloud\Tea\Model;

class diagnosis extends Model
{
    /**
     * @var string
     */
    public $cnDocUrl;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $internationalDocUrl;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'cnDocUrl'            => 'CnDocUrl',
        'code'                => 'Code',
        'endpointType'        => 'EndpointType',
        'internationalDocUrl' => 'InternationalDocUrl',
        'result'              => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnDocUrl) {
            $res['CnDocUrl'] = $this->cnDocUrl;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->internationalDocUrl) {
            $res['InternationalDocUrl'] = $this->internationalDocUrl;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnosis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnDocUrl'])) {
            $model->cnDocUrl = $map['CnDocUrl'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['InternationalDocUrl'])) {
            $model->internationalDocUrl = $map['InternationalDocUrl'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}

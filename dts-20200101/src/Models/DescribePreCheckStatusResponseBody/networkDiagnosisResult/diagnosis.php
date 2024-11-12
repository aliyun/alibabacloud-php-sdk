<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\networkDiagnosisResult;

use AlibabaCloud\Tea\Model;

class diagnosis extends Model
{
    /**
     * @description Document address for China region.
     *
     * @example https://***.ali***.com/document_detail/470447.html
     *
     * @var string
     */
    public $cnDocUrl;

    /**
     * @description Diagnostic code.
     *
     * @example dts.kunlun.diagnosis.network.express_doc
     *
     * @var string
     */
    public $code;

    /**
     * @description Access point, the return values are: - **source**: source end. - **destination**: destination end. - **unknown**: unknown.
     *
     * @example source
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description Overseas region document address.
     *
     * @example https://www.ali***.com/help/en/data-transmission-service/latest/how-to-solve-an-error-when-accessing-a-database-instance-to-dts-using-vpn
     *
     * @var string
     */
    public $internationalDocUrl;

    /**
     * @description Reserved field for diagnostic results, default is empty.
     *
     * @example none
     *
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

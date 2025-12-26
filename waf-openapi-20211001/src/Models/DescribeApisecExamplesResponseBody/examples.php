<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecExamplesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecExamplesResponseBody\examples\requestSensitiveData;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecExamplesResponseBody\examples\responseSensitiveData;

class examples extends Model
{
    /**
     * @var string
     */
    public $apiUrl;

    /**
     * @var string
     */
    public $pocPayload;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $request;

    /**
     * @var requestSensitiveData[]
     */
    public $requestSensitiveData;

    /**
     * @var string
     */
    public $response;

    /**
     * @var responseSensitiveData[]
     */
    public $responseSensitiveData;
    protected $_name = [
        'apiUrl' => 'ApiUrl',
        'pocPayload' => 'PocPayload',
        'protocol' => 'Protocol',
        'request' => 'Request',
        'requestSensitiveData' => 'RequestSensitiveData',
        'response' => 'Response',
        'responseSensitiveData' => 'ResponseSensitiveData',
    ];

    public function validate()
    {
        if (\is_array($this->requestSensitiveData)) {
            Model::validateArray($this->requestSensitiveData);
        }
        if (\is_array($this->responseSensitiveData)) {
            Model::validateArray($this->responseSensitiveData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiUrl) {
            $res['ApiUrl'] = $this->apiUrl;
        }

        if (null !== $this->pocPayload) {
            $res['PocPayload'] = $this->pocPayload;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }

        if (null !== $this->requestSensitiveData) {
            if (\is_array($this->requestSensitiveData)) {
                $res['RequestSensitiveData'] = [];
                $n1 = 0;
                foreach ($this->requestSensitiveData as $item1) {
                    $res['RequestSensitiveData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }

        if (null !== $this->responseSensitiveData) {
            if (\is_array($this->responseSensitiveData)) {
                $res['ResponseSensitiveData'] = [];
                $n1 = 0;
                foreach ($this->responseSensitiveData as $item1) {
                    $res['ResponseSensitiveData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ApiUrl'])) {
            $model->apiUrl = $map['ApiUrl'];
        }

        if (isset($map['PocPayload'])) {
            $model->pocPayload = $map['PocPayload'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }

        if (isset($map['RequestSensitiveData'])) {
            if (!empty($map['RequestSensitiveData'])) {
                $model->requestSensitiveData = [];
                $n1 = 0;
                foreach ($map['RequestSensitiveData'] as $item1) {
                    $model->requestSensitiveData[$n1] = requestSensitiveData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }

        if (isset($map['ResponseSensitiveData'])) {
            if (!empty($map['ResponseSensitiveData'])) {
                $model->responseSensitiveData = [];
                $n1 = 0;
                foreach ($map['ResponseSensitiveData'] as $item1) {
                    $model->responseSensitiveData[$n1] = responseSensitiveData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorLogResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     **
     *
     **Description** The status code 200 indicates that the request was successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The logs of the instant test tasks.
     *
     * @example \[{\\"redirectCount\\":0.0,\\"SSLConnectTime\\":0.0,\\"pingDetail\\":\\"\\",\\"HTTPConnectTime\\":0.0,\\"isp\\":\\"465\\",\\"errorCode\\":611,\\"ispCN\\":\\"Alibaba\\",\\"resolution\\":\\"\\",\\"areaEN\\":\\"HuaBei\\",\\"taskEndTimestamp\\":1638422475687,\\"targetIspEN\\":\\"\\",\\"TotalTime\\":1.0,\\"taskStartTimestamp\\":1638422474389,\\"countryCN\\":\\"China\\",\\"provinceEN\\":\\"Beijing\\",\\"countryEN\\":\\"China\\",\\"targetCityEN\\":\\"\\",\\"curlConnectTime\\":0.0,\\"ips\\":\\"\\",\\"route\\":\\"\\",\\"tcpConnectTime\\":0.0,\\"cityEN\\":\\"Beijing\\",\\"HTTPDownloadSpeed\\":0.0,\\"HTTPDownloadTime\\":0.0,\\"HTTPResponseCode\\":0.0,\\"areaCN\\":\\"North China\\",\\"city\\":\\"546\\",\\"expection\\":\\"\\",\\"suorceIp\\":\\"192.168.XX.XX \\",\\"ispEN\\":\\"Alibaba\\",\\"HTTPDNSTime\\":1.0,\\"targetIsp\\":\\"\\",\\"curlStarttransferTime\\":0.0,\\"provinceCN\\":\\"Beijing\\",\\"timestamp\\":1638422474000,\\"redirectTime\\":0.0,\\"targetCity\\":\\"\\", \\"expect\\":\\"\\",\\"HTTPDownloadSize\\":0.0,\\"localDns\\":\\"192.168.XX.XX\\",\\"cityCN\\":\\"Beijing\\",\\"taskId\\":\\"afa5c3ce-f944-4363-9edb-ce919a29\*\*\*\*\\"}]
     *
     * @var string
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 67F646FA-ED8A-58C2-B461-451DB52C8B14
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

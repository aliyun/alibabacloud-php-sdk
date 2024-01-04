<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\apiHTTP;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\fileDownload;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\netDNS;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\netICMP;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\netTCP;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\stream;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\website;
use AlibabaCloud\Tea\Model;

class monitorConf extends Model
{
    /**
     * @description The HTTP(S) synthetic test parameters.
     *
     * @var apiHTTP
     */
    public $apiHTTP;

    /**
     * @description The file download parameters.
     *
     * @var fileDownload
     */
    public $fileDownload;

    /**
     * @description The DNS synthetic test parameters. This parameter is required if the TaskType parameter is set to 3.
     *
     * @var netDNS
     */
    public $netDNS;

    /**
     * @description The ICMP synthetic test parameters. This parameter is required if the TaskType parameter is set to 1.
     *
     * @var netICMP
     */
    public $netICMP;

    /**
     * @description The TCP synthetic tests parameters. This parameter is required if the TaskType parameter is set to 2.
     *
     * @var netTCP
     */
    public $netTCP;

    /**
     * @description 流媒体拨测配置。
     *
     * @var stream
     */
    public $stream;

    /**
     * @description The website-speed measurement parameters.
     *
     * @var website
     */
    public $website;
    protected $_name = [
        'apiHTTP'      => 'ApiHTTP',
        'fileDownload' => 'FileDownload',
        'netDNS'       => 'NetDNS',
        'netICMP'      => 'NetICMP',
        'netTCP'       => 'NetTCP',
        'stream'       => 'Stream',
        'website'      => 'Website',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiHTTP) {
            $res['ApiHTTP'] = null !== $this->apiHTTP ? $this->apiHTTP->toMap() : null;
        }
        if (null !== $this->fileDownload) {
            $res['FileDownload'] = null !== $this->fileDownload ? $this->fileDownload->toMap() : null;
        }
        if (null !== $this->netDNS) {
            $res['NetDNS'] = null !== $this->netDNS ? $this->netDNS->toMap() : null;
        }
        if (null !== $this->netICMP) {
            $res['NetICMP'] = null !== $this->netICMP ? $this->netICMP->toMap() : null;
        }
        if (null !== $this->netTCP) {
            $res['NetTCP'] = null !== $this->netTCP ? $this->netTCP->toMap() : null;
        }
        if (null !== $this->stream) {
            $res['Stream'] = null !== $this->stream ? $this->stream->toMap() : null;
        }
        if (null !== $this->website) {
            $res['Website'] = null !== $this->website ? $this->website->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiHTTP'])) {
            $model->apiHTTP = apiHTTP::fromMap($map['ApiHTTP']);
        }
        if (isset($map['FileDownload'])) {
            $model->fileDownload = fileDownload::fromMap($map['FileDownload']);
        }
        if (isset($map['NetDNS'])) {
            $model->netDNS = netDNS::fromMap($map['NetDNS']);
        }
        if (isset($map['NetICMP'])) {
            $model->netICMP = netICMP::fromMap($map['NetICMP']);
        }
        if (isset($map['NetTCP'])) {
            $model->netTCP = netTCP::fromMap($map['NetTCP']);
        }
        if (isset($map['Stream'])) {
            $model->stream = stream::fromMap($map['Stream']);
        }
        if (isset($map['Website'])) {
            $model->website = website::fromMap($map['Website']);
        }

        return $model;
    }
}

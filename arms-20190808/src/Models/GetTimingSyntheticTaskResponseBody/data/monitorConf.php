<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\apiHTTP;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\fileDownload;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\netDNS;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\netICMP;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\netTCP;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\stream;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\website;

class monitorConf extends Model
{
    /**
     * @var apiHTTP
     */
    public $apiHTTP;
    /**
     * @var fileDownload
     */
    public $fileDownload;
    /**
     * @var netDNS
     */
    public $netDNS;
    /**
     * @var netICMP
     */
    public $netICMP;
    /**
     * @var netTCP
     */
    public $netTCP;
    /**
     * @var stream
     */
    public $stream;
    /**
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
        if (null !== $this->apiHTTP) {
            $this->apiHTTP->validate();
        }
        if (null !== $this->fileDownload) {
            $this->fileDownload->validate();
        }
        if (null !== $this->netDNS) {
            $this->netDNS->validate();
        }
        if (null !== $this->netICMP) {
            $this->netICMP->validate();
        }
        if (null !== $this->netTCP) {
            $this->netTCP->validate();
        }
        if (null !== $this->stream) {
            $this->stream->validate();
        }
        if (null !== $this->website) {
            $this->website->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiHTTP) {
            $res['ApiHTTP'] = null !== $this->apiHTTP ? $this->apiHTTP->toArray($noStream) : $this->apiHTTP;
        }

        if (null !== $this->fileDownload) {
            $res['FileDownload'] = null !== $this->fileDownload ? $this->fileDownload->toArray($noStream) : $this->fileDownload;
        }

        if (null !== $this->netDNS) {
            $res['NetDNS'] = null !== $this->netDNS ? $this->netDNS->toArray($noStream) : $this->netDNS;
        }

        if (null !== $this->netICMP) {
            $res['NetICMP'] = null !== $this->netICMP ? $this->netICMP->toArray($noStream) : $this->netICMP;
        }

        if (null !== $this->netTCP) {
            $res['NetTCP'] = null !== $this->netTCP ? $this->netTCP->toArray($noStream) : $this->netTCP;
        }

        if (null !== $this->stream) {
            $res['Stream'] = null !== $this->stream ? $this->stream->toArray($noStream) : $this->stream;
        }

        if (null !== $this->website) {
            $res['Website'] = null !== $this->website ? $this->website->toArray($noStream) : $this->website;
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
